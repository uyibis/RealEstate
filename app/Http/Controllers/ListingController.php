<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Enum\PropertyType,
    Listing,
    Models\ListingApartment,
    Models\ListingBuilding,
    Models\ListingImage,
    Models\ListingLand,
    Models\ListingNew,
    Models\PropertyEntry,
    Models\UserUpload,
    Realtor};


class ListingController extends Controller
{

    public function index()
    {
        $listings = Listing::orderBy('id', 'DESC')->get();
        $published_listings = $listings->where('is_published', '1');
        $unpublished_listings = $listings->where('is_published', '0');
        return view('admin.layouts.listings.listings', compact('published_listings','unpublished_listings'));
        // $listings = Listing::where('is_published', '1')->orderBy('id', 'DESC')->get();

    }


    public function create()
    {
        $realtors = Realtor::all();
        return view('admin.layouts.listings.add-listing', compact('realtors'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'square_feet' => 'required',
            'lot_size' => 'required',
            'lot_size' => 'required',
            'garage' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'city' => 'required',
            'country' => 'required',
            'realtor_id' => 'required',
            'is_published' => 'required',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $listing = new Listing([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'square_feet' => $request->get('square_feet'),
            'lot_size' => $request->get('lot_size'),
            'bedroom' => $request->get('bedroom'),
            'bathroom' => $request->get('bathroom'),
            'garage' => $request->get('garage'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'realtor_id' => $request->get('realtor_id'),
            'is_published' => $request->get('is_published'),

        ]);


        //call custom file upload function
        $isSuccess = $this->massimageUploadHandler($request, $listing);

        if ($isSuccess) {

            $listing->save();
            return redirect(route('listings.index'))->with('success', 'Listing Added!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
//{"type":"land","title":"Blufx Restructure Refund","price":2432,"plot_size":"1002 / 08402","area":"Benin City, NG","city":"Benin City, NG","country":"Nigeria","description":"jdflajfla","realtor_id":1,"is_published":"1","images":[{"url":"http://127.0.0.1:8000/images/listing/1697361875_transfer.png","uploading":false,"selected":true,"type":"image/png","id":1}]}
//{"type":"building","title":"Blufx Restructure Refund","price":213213,"garage":"yes","country":"aslkdfjalds","description":"lkdfajlfj","realtor_id":1,"is_published":"1","images":[{"url":"http://127.0.0.1:8000/images/listing/1697361875_transfer.png","uploading":false,"selected":true,"type":"image/png","id":1}]}
//{"type":"apartment","title":"Blufx Restructure Refund","price":35345,"bathroom":3,"kitchen":"inside","city":"Benin","country":"Nigeria","area":"Benin","description":"lksjfladjl","realtor_id":1,"is_published":"1","images":[{"url":"http://127.0.0.1:8000/images/listing/1697361875_transfer.png","uploading":false,"selected":true,"type":"image/png","id":1}]}

    public function new_store(Request $request)
    {
        $id= Auth::id();
        $data = $request->json()->all();
        $type = $data['type'];
        $entry = new PropertyEntry;
        switch ($type) {
            case 'land':
               $landlisting=  $this->saveLandListing($data);

               $entry->user_id=$id;
               $entry->property_id=$landlisting->id;
               $entry->property_type=PropertyType::LAND;

                break;
            case 'building':
               $buildinglisting= $this->saveBuildingListing($data);
                $entry->user_id=$id;
                $entry->property_id=$buildinglisting->id;
                $entry->property_type=PropertyType::BUILDING;
                break;
            case 'apartment':
              $apartmentlisting=  $this->saveApartmentListing($data);
                $entry->user_id=$id;
                $entry->property_id=$apartmentlisting->id;
                $entry->property_type=PropertyType::APARTMENT;
                break;
            default:
                return response()->json(['message' => 'Invalid listing type'], 400);
        }
        if ($entry->save()) {
            return response()->json(['message' => 'Listing saved successfully'], 200);
        } else {
            return response()->json(['message' => 'Listing failed'], 500);
        }
    }

    private function saveLandListing($data) {
        // Create a new LandListing model instance
        $landListing = new ListingLand;

        // Set the properties of the LandListing model based on the JSON data
        $landListing->title = $data['title'];
        $landListing->price = $data['price'];
        $landListing->plot_size = $data['plot_size'];
        $landListing->area = $data['area'];
        $landListing->city = $data['city'];
        $landListing->country = $data['country'];
        $landListing->description = $data['description'];
        $landListing->realtor_id = $data['realtor_id'];
        $landListing->is_published = $data['is_published'];

        // Save the LandListing model to the database
        $landListing->save();

        // Handle the images
        foreach ($data['images'] as $imageData) {
            $image = new ListingImage;
            $image->listing_id = $landListing->id;
            $image->user_upload_id = $imageData['id'];
            $image->save();
        }
        return $landListing;
    }

    private function saveBuildingListing($data) {
        // Create a new BuildingListing model instance
        $buildingListing = new ListingBuilding;
        // Set the properties of the BuildingListing model based on the JSON data
        $buildingListing->title = $data['title'];
        $buildingListing->price = $data['price'];
        $buildingListing->garage = $data['garage'];
        $buildingListing->area = $data['area'];
        $buildingListing->city = $data['city'];
        $buildingListing->country = $data['country'];
        $buildingListing->plot_size = $data['plot_size'];
        $buildingListing->description = $data['description'];
        $buildingListing->realtor_id = $data['realtor_id'];
        $buildingListing->is_published = $data['is_published'];
        // Save the BuildingListing model to the database
        $buildingListing->save();
        // Handle the images
        foreach ($data['images'] as $imageData) {
            $image = new ListingImage();
            $image->listing_id = $buildingListing->id;
            $image->user_upload_id = $imageData['id'];
            $image->save();
        }
        return $buildingListing;
    }

    private function saveApartmentListing($data) {
        // Create a new ApartmentListing model instance
        $apartmentListing = new ListingApartment;

        // Set the properties of the ApartmentListing model based on the JSON data
        $apartmentListing->title = $data['title'];
        $apartmentListing->price = $data['price'];
//        $apartmentListing->bathroom = $data['bathroom'];
        $apartmentListing->kitchen = $data['kitchen'];
        $apartmentListing->city = $data['city'];
        $apartmentListing->country = $data['country'];
        $apartmentListing->area = $data['area'];
        $apartmentListing->description = $data['description'];
        $apartmentListing->realtor_id = $data['realtor_id'];
        $apartmentListing->is_published = $data['is_published'];

        // Save the ApartmentListing model to the database
        $apartmentListing->save();

        // Handle the images
        foreach ($data['images'] as $imageData) {
            $image = new ListingImage();
            $image->listing_id = $apartmentListing->id;
            $image->user_upload_id = $imageData['id'];
            $image->save();
        }
        return $apartmentListing;
    }


    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('admin.layouts.listings.single-listing', compact('listing'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $listing = Listing::findOrFail($id);


        $listing->title = $request->get('title');
        $listing->description = $request->get('description');
        $listing->price = $request->get('price');
        $listing->square_feet = $request->get('square_feet');
        $listing->lot_size = $request->get('lot_size');
        $listing->garage = $request->get('garage');
        $listing->bedroom = $request->get('bedroom');
        $listing->bathroom = $request->get('bathroom');
        $listing->city = $request->get('city');
        $listing->country = $request->get('country');
        $listing->realtor_id = $request->get('realtor_id');
        $listing->is_published = $request->get('is_published');


        //function for image upload
        $this->massimageUploadHandler($request, $listing);
        $listing->save();
        return redirect(route('listings.index'))->with('success', 'Listing Updated Successfully!');
    }


    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        $isSuccess = $listing->delete();

        if ($isSuccess) {
            $this->imageDeleteHandler($listing);
        }
        return redirect(route('listings.index'))->with('success', 'Listing Deleted Successfully!');
    }


    //method for mass image upload
    private function massimageUploadHandler($request, $listing)
    {
        $isSuccess = FALSE;
        $images = array(
            $request->image,
            $request->image_one,
            $request->image_two,
            $request->image_three,
            $request->image_four,
            $request->image_five,
            $request->image_six,
        );
        foreach ($images as $key => $image) {
            if (file_exists($image)) {
                $isSuccess = $this->imageUploadHandler($image, $listing, $key);
            }
        }
        return $isSuccess;
    }

    public function upload(Request $request)
    {

        $request->validate([
            'file' => 'required|mimetypes:image/jpeg,image/png,image/jpg,image/gif,video/mp4,video/quicktime,video/x-msvideo,video/x-flv,video/x-ms-wmv|max:20480000', // Adjust the allowed file types and maximum size as needed
        ]);
        //return ['status'=>1];
        if ($request->hasFile('file')) {
            $file = $request->file('file');

         return  $this->UploadHandler($file);
        }

        return response()->json([
            'error' => 'No file uploaded or invalid file type',
        ], 400);
    }
//method for image upload
    private function UploadHandler($image)
    {

        $user = auth()->user(); // Get the authenticated user
        //return ['status'=>$user->id];
        // Validate the user and the uploaded image
        if ($user && $image) {
            // Generate a unique file name
            $image_new_name = time() . '_' . $image->getClientOriginalName();
            $image_url = 'images/listing/' . $image_new_name;

            $userUpload = new UserUpload([
                'user_id' => $user->id,
                'file_name' => $image_new_name,
                'file_path' => asset($image_url),
                'file_type' => $image->getClientMimeType(),
                'file_size' => $image->getSize(),
            ]);

            // Move the uploaded file to the public directory
            $isSuccess = $image->move(public_path('images/listing'), $image_new_name);

            if ($isSuccess) {
                // Create a new user upload record in the database

                // Save the user upload to the database
                $userUpload->save();

                // Update the corresponding property in your listing (if needed)
                //                $table_name = 'thumbnail_' . $key;
                //                if (file_exists($listing->$table_name)) {
                //                    unlink($listing->$table_name);
                //                }
                //                $listing->$table_name = $image_url;

                return
                     [
                        'id' => $userUpload->id,
                        'name' => $userUpload->file_name,
                        'url' => $userUpload->file_path, // Assumes a public storage setup
                        'type'=>$userUpload->file_type
                    ];

            }
        }

        return false;
    }

    public function deleteUpload($id) {
        // Find the record by its ID
        $upload = UserUpload::find($id);

        if ($upload) {
            // Delete the record if found
            $upload->delete();
            return ['status'=>1, 'message'=>'done'];
        } else {
            return ['status'=>0, 'message'=>'Failed'];
        }
    }

    public function getUpload(Request $request)
    {
      //  echo "hello";
        $user = auth()->user(); // Get the authenticated user
        // Fetch the list of uploaded images from the database
        $images = UserUpload::where('user_id',$user->id)->get();

        // Transform the image data as needed, for example, get the file URLs


        return $images->map(function ($image) {
            return [
                'id' => $image->id,
                'name' => $image->file_name,
                'url' => asset($image->file_path), // Assumes a public storage setup
                'type'=>$image->file_type
            ];
        });
    }
    //method for image upload

    private function imageUploadHandler($image, $listing, $key)
    {
        $image_new_name = time() . '.' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $isScucess = $image->move(public_path('images/listing'), $image_new_name);
        if ($isScucess) {
            $image_url = 'images/listing/' . $image_new_name;
            $table_name = 'thumbnail_' . $key;
            if (file_exists($listing->$table_name)) {
                unlink($listing->$table_name);
            }
            $listing->$table_name = $image_url;

            return TRUE;
            return FALSE;
        }
    }

    //method for delete image from folder
    private function imageDeleteHandler($listing)
    {
        $images = array(
            $listing->thumbnail_0,
            $listing->thumbnail_1,
            $listing->thumbnail_2,
            $listing->thumbnail_3,
            $listing->thumbnail_4,
            $listing->thumbnail_5,
            $listing->thumbnail_6,
        );
        foreach ($images as $image) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }



}
