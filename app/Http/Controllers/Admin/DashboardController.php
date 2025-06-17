<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function dashboard(): Response {
        return response()->view('admin.dashboard', [
            'product' => Product::count(),
            'category' => Category::count(),
            'stock' => Stock::count(),
            'stockMenipis' => Stock::where('quantity', '<', 5)->count(),
            'stocks' => Stock::all()
        ]);
    }
}
