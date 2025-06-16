<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }
    
    public function index(): Response
    {
        $products = $this->productService->getProduct();

        return response()->view('admin.products', compact('products'));
    }

    public function create(): Response
    {
        return response()->view('admin.add-product');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $this->productService->addProduct($validated);

        return redirect()->route('admin.product');
    }
}
