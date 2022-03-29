<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController
{
    public function index()
    {
        echo "Это страница FAQ";
    }
    public function create()
    {
        echo "Страница создания FAQ";
    }

    public function edit()
    {
        echo "Страница изменения FAQ";
    }

    public function delete()
    {
        echo "Страница удаления FAQ";
    }
}

?>