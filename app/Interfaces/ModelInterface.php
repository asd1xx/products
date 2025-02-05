<?php

namespace App\Interfaces;

interface ModelInterface
{
    public function list(): array;
    public function create(array $fields): void;
    public function delete(int $id): void;
}
