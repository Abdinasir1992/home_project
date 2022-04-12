@extends('layouts.app')

@section('title', 'Создание часто задаваемого вопроса')

@section('content')
<div>
    <h3>Создание часто задаваемого вопроса</h3>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('faq.post.create') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="question" placeholder="Введите вопрос">
        </div>
        <div>
            <textarea name="answer" id="" cols="30" rows="10" placeholder="Введите ответ"></textarea>
        </div>
        
        <button type="submit">Добавить</button>
    </form>
</div>

@endsection