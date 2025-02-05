<?php

namespace App;

use App\Models\Product;

class Controller
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index(): void
    {
        $products = $this->product->list();
        include 'templates/header.phtml';
        include 'templates/list.phtml';
        include 'templates/footer.phtml';
    }

    public function storeProduct(): void
    {
        $fields = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
        ];
        $this->product->create($fields);
        header('Location: /');
    }

    public function createProduct(): void
    {
        include 'templates/header.phtml';
        include 'templates/create.phtml';
        include 'templates/footer.phtml';
    }

    public function deleteProduct(): void
    {
        $this->product->delete($_POST['id']);
        header('Location: /');
    }
}
