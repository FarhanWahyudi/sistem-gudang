<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }

    public function index(): Response
    {
        $categories = $this->categoryService->getCategory();

        return response()->view('admin.categories', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:categories,name'
        ]);

        $this->categoryService->addCategory($validated);

        return redirect()->route('admin.category');
    }

    public function showProducts(int $id): Response
    {
        $category = Category::findOrFail($id);

        return response()->view('admin.show-products', [
            'category' => $category->name,
            'products' => $category->products
        ]);
    }

    public function deleteCategory(int $id): RedirectResponse
    {
        $this->categoryService->deleteCategory($id);

        return redirect()->route('admin.category');
    }
}
