<?php

namespace App\Services;

use Illuminate\Support\Collection;

interface CategoryService
{
    function getCategory(): Collection;

    function addCategory(string $category): void;
}
