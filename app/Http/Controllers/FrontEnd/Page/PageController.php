<?php

namespace App\Http\Controllers\FrontEnd\Page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\CardItem;
use App\Models\Establishment;
use App\Models\Gallery;
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
        $offers = CardItem::where('type', 'offer')->where('is_featured', 1)->distinct('establishment_id')->get();
        $galleries = Gallery::where('status', 1)->inRandomOrder()->distinct('establishment_id')->get();
        return view('frontEnd.pages.welcome', compact(['settings', 'establishments', 'banners', 'testimonials','offers', 'galleries']));
    }

    public function branch($slug)
    {
        $establishment = Establishment::where('slug', $slug)->where('status', 1)->first();

        $banners = Banner::where('establishment_id', $establishment->id)->where('status', 1)->get();
        $branches = Branch::where('establishment_id', $establishment->id)->where('status', 1)->get();
        $testimonials = Testimonial::where('status', 1)->where('establishment_id', $establishment->id)->get();
        $products = CardItem::where('establishment_id', $establishment->id)->where('is_featured', 1)->where('status', 1)->get();
        $offers = CardItem::where('type', 'offer')->where('is_featured', 1)->distinct('establishment_id')->get();
        view()->share('establishment', $establishment);
        $galleries = Gallery::where('establishment_id', $establishment->id)->where('status', 1)->inRandomOrder()->get();
        return view('frontEnd.pages.branch', compact(['establishment', 'banners', 'branches', 'products', 'testimonials','offers', 'galleries']));
    }
}
