<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function category(): Response
    {
        $categories = Category::all();

        return response()->view('user.categories', [
            'categories' => $categories
        ]);
    }

    public function showProducts(int $id): Response
    {
        $category = Category::findOrFail($id);

        return response()->view('user.show-products', [
            'category' => $category->name,
            'products' => $category->products
        ]);
    }
}
