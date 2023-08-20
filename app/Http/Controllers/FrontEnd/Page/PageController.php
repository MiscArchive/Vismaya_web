<?php

namespace App\Http\Controllers\FrontEnd\Page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Establishment;
use App\Models\Setting;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $establishments = Establishment::active()->get();
        $banners = Banner::where('status', 1)->distinct('establishment_id')->get();
        $testimonials = Testimonial::where('status', 1)->distinct('establishment_id')->get();
        return view('frontEnd.pages.welcome', compact(['settings','establishments','banners','testimonials']));
    }

    public function branch($slug)
    {
        $establishment = Establishment::where('slug', $slug)->where('status', 1)->first();
        return view('frontEnd.pages.branch', compact('establishment'));
    }
}
