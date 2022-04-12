@extends('layouts.app')

@section('title', "Часто задаваемые вопросы")

@section('content')
<div>
    <h3>Часто задаваемые вопросы</h3>
    <div>
        <a href=" {{ route('faq.get.create') }} ">Добавить новый вопрос</a>
    </div>
    <div>
        @foreach($faq as $faq)
        <div>
            <h4>{{ $faq->question }}</h4>
        </div>
        <div>
            <span>{{ $faq->answer }}</span>
        </div>
        <span>
            <a href=" {{ route('faq.edit', ['faq_id' => $faq->id]) }} ">Изменить</a>
        </span>
        <span>
            <a href=" {{ route('faq.delete', ['faq_id' => $faq->id]) }} ">Удалить</a>
        </span>
        <hr>
        @endforeach
    </div>
</div>

@endsection

