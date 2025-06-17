<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StafController extends Controller
{
    public function staf(): Response {
        $users = User::with('roles')->get();

        return response()->view('admin.staf', compact('users'));
    }
}
