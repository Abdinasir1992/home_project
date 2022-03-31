@extends('layouts.app')

@section('title', 'Создание категории')

@section('content')
<div>
    <h3>Добавление категории</h3>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=" {{ route('category.post.create') }}" method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Введите категорию новости">
        </div>
        <button type="submit">Создать</button>
    </form>
</div>
@endsection