@extends('layouts.app')

@section('title', 'Редактирование новости')

@section('content')

<div>
    <h3>Редактирование новости</h3>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=" {{route('posts.post.update', ['post_id' => $post_id]) }} " method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Введите заголовок" value=" {{ $post->title }} ">
        </div>
        <div>
            <textarea name="text" placeholder="Текст новости">
                {{ $post->text }}
            </textarea>
        </div>
        <div>
            <select name="category_id" id="">
                <option value="1">Общество</option>
                <option value="2">Политика</option>
            </select>
        </div>
        <button type="submit">Редактировать</button>
    </form>
</div>

@endsection