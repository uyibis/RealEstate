<?php

namespace App\Http\Controllers;
use App\{Enum\PropertyType, Listing, Models\ListingNew, Models\PropertyEntry, Realtor, Contact, Som};

use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index()
    {
         $latest_listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->limit('3')->get();
         // dd($latest_listings);
         return view('site.layouts.index', compact('latest_listings'));
    }
    public function template()
    {
        $listings = ListingNew::all();
        //$latest_listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->limit('3')->get();
        return view('site.template.index', compact('listings'));
    }

    public function new_Index()
    {
        //$listings = ListingNew::all();
        $latest_listings=PropertyEntry::orderBy('id','DESC')->where('property_type',PropertyType::LAND)->where('is_published','1')
            ->limit('3')->with('land_listing.images.user_upload')->with('land_listing.realtor')->get();
        $apartment_listings=PropertyEntry::orderBy('id','DESC')->where('property_type',PropertyType::APARTMENT)->where('is_published','1')
            ->limit('3')->with('apartment_listing.images.user_upload')->with('apartment_listing.realtor')->get();
        $building_listings=PropertyEntry::orderBy('id','DESC')->where('property_type',PropertyType::BUILDING)->where('is_published','1')
            ->limit('3')->with('building_listing.images.user_upload')->with('building_listing.realtor')->get();
        //die (json_encode($building_listings));
        //$latest_listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->limit('3')->get();
        return view('front.home.index', compact('latest_listings','apartment_listings','building_listings'));
    }

    public function listings()
    {
        $listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->get();
        return view('site.layouts.listings', compact('listings'));
    }

    public function listing($id)
    {
       // $listing = Listing::with('realtor')->where('is_published','1')->findOrFail($id);
        $listing = PropertyEntry::find($id);
        $property_type=$listing->property_type;
        switch ( $property_type){
            case PropertyType::LAND:
                $listing=PropertyEntry::where('id',$id)->with('land_listing.images.user_upload')->with('land_listing.realtor')->first();
                return view('front.single_view.land.index',compact('listing'));
            case PropertyType::BUILDING:
                $listing=PropertyEntry::where('id',$id)->with('building_listing.images.user_upload')->with('building_listing.realtor')->first();
                return view('front.single_view.building.index',compact('listing'));
            case PropertyType::APARTMENT:
                $listing=PropertyEntry::where('id',$id)->with('apartment_listing.images.user_upload')->with('apartment_listing.realtor')->first();
                return view('front.single_view.apartment.index',compact('listing'));
        }
       // dd(json_encode($listing));
       // return view('site.layouts.listing', compact('listing'));
    }


    public function about()
    {
        $realtors = Realtor::all();
        $som = Som::with('realtor')->first();
        return view('site.layouts.about',compact('som','realtors'));
    }


    public function dashboard()
    {
        if (Auth::check())
        {
            $userid = Auth::id();
            $lists = Contact::with('listing')->where('user_id',$userid)->get();
            return view('site.layouts.dashboard',compact('lists'));
        }
    }

}
