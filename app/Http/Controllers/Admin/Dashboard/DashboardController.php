<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CardItem;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
