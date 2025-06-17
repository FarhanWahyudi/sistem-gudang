<?php

namespace App\Services;

use Illuminate\Support\Collection;

interface CategoryService
{
    function getCategory(): Collection;

    function addCategory(array $data): void;

    function deleteCategory(int $id): void;
}
