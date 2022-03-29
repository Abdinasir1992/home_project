@extends('layouts.app')

@section('title', 'Добавление новости')

@section('content')

<div>
    <h3>Добавление новости</h3>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('posts.post.create') }}">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Заголовок">
        </div>
        <div>
            <textarea type="text" name="text" placeholder="Текст новости"></textarea>
        </div>
        <div>
            <button type="submit">Добавить новость</button>
        </div>
    </form>
</div>
@endsection