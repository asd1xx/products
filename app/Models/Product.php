<?php

namespace App\Models;

use App\Interfaces\ModelInterface;

class Product implements ModelInterface
{
    public function list()
    {
        return $_SESSION['products'] ?? [];
    }

    public function create($fields)
    {
        $_SESSION['products'][] = $fields;
    }

    public function delete($id)
    {
        unset($_SESSION['products'][$id]);
    }
}
