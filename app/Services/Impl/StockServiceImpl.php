<?php

namespace App\Services\Impl;

use App\Models\Product;
use App\Models\Stock;
use App\Services\StockService;

class StockServiceImpl implements StockService
{
    public function addStock(int $productId, int $stock): void
    {
        $product = Product::find($productId);

        if($product) {
            Stock::create([
                'product_id' => $productId,
                'type' => 'in',
                'quantity' => $stock
            ]);

            $product->quantity += $stock;
            $product->save();
        }
    }

    public function reduceStock(int $productId, int $stock): void
    {
        $product = Product::find($productId);
        
        if($product && $stock <= $product->quantity) {
            Stock::create([
                'product_id' => $productId,
                'type' => 'out',
                'quantity' => $stock
            ]);

            $product->quantity -= $stock;
            $product->save();
        }
    }
}
