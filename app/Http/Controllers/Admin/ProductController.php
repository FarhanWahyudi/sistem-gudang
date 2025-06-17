<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

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
        $categories = Category::all();

        return response()->view('admin.add-product', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('product-image'), $imagename);

        $validated['image'] = $imagename;

        $this->productService->addProduct($validated);

        return redirect()->route('admin.product');
    }

    public function update(int $id): Response
    {
        return response()->view('admin.update-product', [
            'product' => Product::find($id),
            'categories' => Category::all()
        ]);
    }

    public function postUpdate(Request $request, int $id): RedirectResponse
    {
        $product = Product::find($id);

        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|integer|min:0',
        ]);

        if($request->image) {
            if ($product->image && File::exists(public_path('product-image/' . $product->image))) {
                File::delete(public_path('product-image/' . $product->image));
            }

            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('product-image'), $imagename);
    
            $validated['image'] = $imagename;
        }
        
        $this->productService->updateProduct($id, $validated);

        return redirect()->route('admin.product');
    }

    public function delete(int $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        if($product->image && File::exists(public_path('product-image/' . $product->image))) {
            File::delete(public_path('product-image/' . $product->image));
        }

        $product->delete();

        return redirect()->route('admin.product');
    }
}
