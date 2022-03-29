<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController
{
    public function index()
    {
        echo "Страница списка продуктов";
    }

    public function create()
    {
        echo "Страница создания продукта";
    }

    public function edit()
    {
        echo "Страница изменения продукта";
    }

    public function delete()
    {
        echo "Страница удаления продукта";
    }
}
?>