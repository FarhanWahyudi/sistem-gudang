<?php

namespace App\Services;

interface StockService
{
    function addStock(int $productId, int $stock): void;

    function reduceStock(int $productId, int $stock): void;
}
