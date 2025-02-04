<?php

namespace App\Interfaces;

interface ModelInterface
{
    public function list();
    public function create($fields);
    public function delete($id);
}
