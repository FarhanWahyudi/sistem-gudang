<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StafController extends Controller
{
    public function staf(): Response {
        return response()->view('admin.staf');
    }
}
