<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;

class Common
{
static  public  function uniqueAreas(){
       return DB::table('listing_apartments')
            ->select('area')
            ->union(DB::table('listing_buildings')->select('area'))
            ->union(DB::table('listing_lands')->select('area'))
            ->distinct()
            ->pluck('area');
    }
static public function uniqueKeywords(){
        return DB::table('listing_apartments')
            ->select('title')
            ->union(DB::table('listing_buildings')->select('title'))
            ->union(DB::table('listing_lands')->select('title'))
            ->distinct()
            ->pluck('title');
    }
}
