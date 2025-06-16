<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    private ProductService $productService;

    protected function setUp(): void
    {
        parent::setUp();

        Product::query()->delete();

        $this->productService = $this->app->make(ProductService::class);
    }

    public function testAddSuccess()
    {
        $this->productService->addProduct('table', 1, 120000, 20);

        $result = Product::where('title', 'table')->get();

        $this->assertCount(1, $result);
    }
}
