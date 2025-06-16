<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function product(): Response {
        return response()->view('admin.products');
    }

    public function addProduct(): Response {
        return response()->view('admin.add-product');
    }
}
