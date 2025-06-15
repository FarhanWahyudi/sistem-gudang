<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    public function dashboard(): Response {
        return response()->view('admin.dashboard');
    }
    
    public function stock(): Response {
        return response()->view('admin.stocks');
    }

    public function product(): Response {
        return response()->view('admin.products');
    }

    public function category(): Response {
        return response()->view('admin.categories');
    }

    public function staf(): Response {
        return response()->view('admin.staf');
    }

    public function addProduct(): Response {
        return response()->view('admin.add-product');
    }
}
