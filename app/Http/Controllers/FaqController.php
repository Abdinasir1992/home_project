<?php 
namespace App\Http\Controllers;

use App\Http\Requests\FaqCreateRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController
{
    public function index()
    {
        // echo "Это страница FAQ";
        $faq = Faq::all();
        return view('faq.index', ['faq' => $faq]);
    }
    public function create()
    {
        // echo "Страница создания FAQ";
        return view('faq.create');
    }

    public function store(FaqCreateRequest $request)
    {
        $question = $request->post('question');
        $answer = $request->post('answer');

        $faq = $request->all();
        Faq::create($faq);


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