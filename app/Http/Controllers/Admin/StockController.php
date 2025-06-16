<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StockController extends Controller
{
    public function stock(): Response {
        return response()->view('admin.stocks');
    }
}
