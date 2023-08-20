<?php

namespace App\Http\Controllers\FrontEnd\Page;

use App\Http\Controllers\Controller;
use App\Models\Establishment;
use App\Models\Setting;

class PageController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $establishments = Establishment::active()->get();
        return view('frontEnd.pages.welcome', compact(['settings','establishments']));
    }

    public function branch()
    {
        return view('frontEnd.pages.branch');
    }
}
