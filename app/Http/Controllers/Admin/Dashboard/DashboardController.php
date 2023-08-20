<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CardItem;
use App\Models\Enquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $products = CardItem::whereIn('type', ['product', 'service'])->get();
        $enquiries = Enquiry::get();
        $data = [
            'total_products' => $products->count(),
            'active_products' => $products->where('status', 1)->count(),
            'featured_products' => $products->where('status', 1)->where('is_featured', 1)->count(),
            'enquiries' => $enquiries->count(),
        ];
        return view('admin.dashboard', compact('data'));
    }
}
