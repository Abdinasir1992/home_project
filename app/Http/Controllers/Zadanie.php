<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Zadanie{
    public function zadacha3()
    {
        $a = 1;
        return view('dz 2,3,4,5.dz', ['a' => $a]);
    }

    public function zadacha4()
    {
        $arr = ['Акыл', 'Урмат', 'Эрлан', 'Нурбек'];
        return view('dz 2,3,4,5.dz4', ['arr' => $arr]);
    }
    
}
?>