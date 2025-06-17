<?php

namespace App\Services\Impl;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Support\Collection;

class ProductServiceImpl implements ProductService
{
    public function getProduct(): Collection
    {
        return Product::all();
    }

    public function addProduct(array $data): void
    {
        Product::create($data);
    }

    public function updateProduct(int $id, array $data): void
    {
        $product = Product::findOrFail($id);

        $product->update($data);
    }
}
