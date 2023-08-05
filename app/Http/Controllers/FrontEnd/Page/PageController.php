<?php

namespace App\Http\Controllers\FrontEnd\Page;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('frontEnd.pages.welcome');
    }
}
