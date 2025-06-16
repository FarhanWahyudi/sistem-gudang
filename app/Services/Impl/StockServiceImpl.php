<?php

namespace App\Services\Impl;

use App\Models\Product;
use App\Models\Stock;
use App\Services\StockService;

class StockServiceImpl implements StockService
{
    public function add(int $productId, int $stock): void
    {
        $product = Product::find($productId);

        if($product) {
            Stock::create([
                'product_id' => $productId,
                'type' => 'in',
                'quantity' => $stock
            ]);

            $product->stock += $stock;
            $product->save();
        }
    }

    public function out(int $productId, int $stock): void
    {
        $product = Product::find($productId);
        
        if($product && $stock <= $product->stock) {
            Stock::create([
                'product_id' => $productId,
                'type' => 'out',
                'quantity' => $stock
            ]);

            $product->stock -= $stock;
            $product->save();
        }
    }
}
