<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutUs()
    {
        return view('home.aboutUs');
    }
}


?>