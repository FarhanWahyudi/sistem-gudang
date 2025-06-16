<?php

namespace App\Services\impl;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Support\Collection;

class CategoryServiceImpl implements CategoryService
{
    public function getCategory(): Collection
    {
        return Category::all();
    }

    public function addCategory(string $category): void
    {
        Category::create([
            'name' => $category
        ]);
    }
}
