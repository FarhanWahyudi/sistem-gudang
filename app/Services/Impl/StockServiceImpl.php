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
            $product->stock += $stock;
            $product->save();

            Stock::create([
                'product_id' => $productId,
                'type' => 'in',
                'quantity' => $stock,
                'stock_akhir' => $product->stock
            ]);
        }
    }

    public function out(int $productId, int $stock): void
    {
        $product = Product::find($productId);
        
        if($product && $stock <= $product->stock) {
            $product->stock -= $stock;
            $product->save();

            Stock::create([
                'product_id' => $productId,
                'type' => 'out',
                'quantity' => $stock,
                'stock_akhir' => $product->stock
            ]);
        }
    }
}
