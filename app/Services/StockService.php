<?php

namespace App\Services;

interface StockService
{
    function add(int $productId, int $stock): void;

    function out(int $productId, int $stock): void;
}
