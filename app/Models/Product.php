<?php

namespace App\Models;

use App\Interfaces\ModelInterface;

class Product implements ModelInterface
{
    public function list(): array
    {
        return $_SESSION['products'] ?? [];
    }

    public function create(array $fields): void
    {
        $_SESSION['products'][] = $fields;
    }

    public function delete(int $id): void
    {
        unset($_SESSION['products'][$id]);
    }
}
