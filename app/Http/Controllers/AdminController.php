<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Listing, Models\PropertyEntry, Realtor, User, Contact};

class AdminController extends Controller
{
    public function index()
    {

        $listings = PropertyEntry::orderBy('id', 'DESC')->get();
        $total_listing = PropertyEntry::where('is_published', '1')->count();
        $total_new_listing = PropertyEntry:: where('is_published', '0')->count();
        $users = User::all();
        $total_admins = $users->where('role', '0')->count();
        $total_users = $users->where('role', '2')->count();
        $total_realtors = Realtor::count();
        $inquiries = Contact::orderBy('id', 'DESC')->get();

        return view('admin.layouts.dashboard',compact('total_listing','total_admins' ,'total_users','listings',
                    'total_new_listing','inquiries','total_realtors'));
    }
}
