<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        return  Testimonial::all();
    }

    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'name' => 'required',
        ]);


        Testimonial::create([
            'message' => $request->input('message'),
            'name' => $request->input('name'),
            'user_id'=>Auth::id()
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial added successfully!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'message' => 'required',
            'name' => 'required',
        ]);

        $testimonial->update([
            'message' => $request->input('message'),
            'name' => $request->input('name'),
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }
}
