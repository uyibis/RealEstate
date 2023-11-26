<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\{Helper\Common, Listing, Models\PropertyEntry};


class searchController extends Controller
{
    public function search_old(Request $request)
    {
        /*$keywords = $request->get('keywords');
        $city = $request->get('city');
        $bedrooms = $request->get('bedrooms');
        $price = $request->get('price');
        $listings = Listing::where('bathroom',$bedrooms)->
                                orWhere('price',$price)->
                                orWhere('city',$city)->
                                when(isset($keywords), function ($query, $keywords) {
                                    $query->where('description','LIKE','%'.$keywords.'%');
                                })->
                                when(isset($keywords), function ($query, $keywords) {
                                    $query->where('description','LIKE','%'.$keywords.'%');
                                })->get();
                    if(count($listings) > 0){
                        return view('site.layouts.search',compact('listings'))->withQuery ( $keywords );
                    }
                    else return view ('site.layouts.search',compact('listings'))->withMessage('No Details found. Try to search again !');*/

        return view('front.search.index');
    }
    public function advance_search(Request $request)
    {
        /*$keywords = $request->get('keywords');
        $city = $request->get('city');
        $bedrooms = $request->get('bedrooms');
        $price = $request->get('price');
        $listings = Listing::where('bathroom',$bedrooms)->
                                orWhere('price',$price)->
                                orWhere('city',$city)->
                                when(isset($keywords), function ($query, $keywords) {
                                    $query->where('description','LIKE','%'.$keywords.'%');
                                })->
                                when(isset($keywords), function ($query, $keywords) {
                                    $query->where('description','LIKE','%'.$keywords.'%');
                                })->get();
                    if(count($listings) > 0){
                        return view('site.layouts.search',compact('listings'))->withQuery ( $keywords );
                    }
                    else return view ('site.layouts.search',compact('listings'))->withMessage('No Details found. Try to search again !');*/

        return view('front.search.index');
    }

    public function search(Request $request)
    {
        $uniqueAreas = Common::uniqueAreas();
        $uniqueKeywords = Common::uniqueKeywords();

        $propertyType = $request->input('type');
        $keyword = $request->input('keyword');
        $location = $request->input('location');

        $result = null;

        switch ($propertyType) {
            case 'apartment':
                $result = $this->searchApartments($keyword, $location);
                break;
            case 'building':
                $result = $this->searchBuildings($keyword, $location);
                break;
            case 'land':
                $result = $this->searchLands($keyword, $location);
                break;
            default:
                // Handle the case when an unsupported property type is provided
                break;
        }
        //dd(json_encode($result));
        return view('front.search.index',compact('result','uniqueAreas','uniqueKeywords'));
    }

    protected function searchApartments($keyword, $location)
    {
        return  PropertyEntry::with('apartment_listing.images.user_upload')->with('apartment_listing.realtor')
            ->where('property_type', 'apartment')
            ->whereHas('apartment_listing', function ($query) use ($keyword, $location) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->whereIn('area', $location);
            })->get();
    }

    protected function searchBuildings($keyword, $location)
    {
        return PropertyEntry::with('building_listing.images.user_upload')->with('building_listing.realtor')
            ->where('property_type', 'building')
            ->whereHas('building_listing', function ($query) use ($keyword, $location) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->whereIn('area', $location);
            })
            ->get();
    }

    protected function searchLands($keyword, $location)
    {
        return PropertyEntry::with('land_listing.images.user_upload')->with('land_listing.realtor')
            ->where('property_type', 'land')
            ->whereHas('land_listing', function ($query) use ($keyword, $location) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->whereIn('area', $location);
            })
            ->get();
    }
}
