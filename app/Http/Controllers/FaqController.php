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

        return redirect()->route('faq.index');
    }

    public function edit(int $faq_id)
    {
        $faq = Faq::findOrFail($faq_id);
        return view('faq.edit', ['faq' => $faq, 'faq_id' => $faq_id]);
    }

    public function postEdit(FaqCreateRequest $request, int $faq_id)
    {
        $question = $request->post('question');
        $answer = $request->post('answer');

        $faq = $request->all('question', 'answer');
        Faq::where('id', $faq_id)->update($faq);
        session()->flash('message', 'FAQ изменен');
        return redirect()->route('faq.index');
    }

    public function delete(int $faq_id)
    {
        Faq::destroy($faq_id);
        session('message', 'Удалено');
        return redirect()->route('faq.index');
    }
}

?>