<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Services\StockService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StockController extends Controller
{
    private StockService $stockService;
    private ProductService $productService;

    public function __construct(StockService $stockService, ProductService $productService) {
        $this->stockService = $stockService;
        $this->productService = $productService;
    }

    public function stock(): Response
    {
        $products = $this->productService->getProduct();

        return response()->view('user.stocks', [
            'products' => $products
        ]);
    }

    public function addStock(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            "stock_masuk.$id" => 'required|integer|min:1'
        ]);

        $stock = $request->input("stock_masuk.$id");

        $this->stockService->add($id, (int)$stock);

        return redirect()->route('user.stock');
    }

    public function reduceStock(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            "stock_keluar.$id" => 'required|integer|min:1'
        ]);

        $stock = $request->input("stock_keluar.$id");

        $this->stockService->out($id, (int)$stock);

        return redirect()->route('user.stock');
    }
}
