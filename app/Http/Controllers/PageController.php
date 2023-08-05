<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        return view('frontEnd.pages.about');
    }

    public function home()
    {
        $imageGallery = Gallery::where('type', 'image')->where('status', 1)->get();
        return view('frontEnd.pages.index' , compact('imageGallery'));
    }

    public function contact()
    {
        return view('frontEnd.pages.contact');
    }

    public function admissionpage()
    {
        return view('frontEnd.pages.admission');
    }

    public function imageGallery()
    {
        $imageGallery = Gallery::where('type', 'image')->where('status', 1)->get();
        return view('frontEnd.pages.gallery.index', compact('imageGallery'));
    }

    public function videoGallery()
    {
        $videoGallery = Gallery::where('type', 'video')->where('status', 1)->get();
        return view('frontEnd.pages.videoGallery.index', compact('videoGallery'));
    }

    public function contactForm(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->subject = $request->subject;
        $enquiry->telephone = $request->telephone;
        $enquiry->comments = $request->comments;
        $enquiry->save();

        return redirect()->route('contactpage');
    }
}
