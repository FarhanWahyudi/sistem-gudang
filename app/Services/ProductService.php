<?php

namespace App\Services;

use Illuminate\Support\Collection;

interface ProductService
{
    function getProduct(): Collection;

    function addProduct(array $data): void;

    function updateProduct(int $id, array $data): void;
}

