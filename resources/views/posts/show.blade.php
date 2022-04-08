@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div>
    <div>
        <h3>{{ $post->title }}</h3>
    </div>
    <div>{{ $post->text }}</div>
    <div>Категория новости: {{ $post->category->name}}</div>

    <div>
        <a href=" {{ route('posts.get.update', ['post_id' => $post->id]) }} ">Изменить</a>
        <a href=" {{ route('posts.get.delete', ['post_id' => $post->id]) }} ">Удалить</a>
    </div>
</div>
@endsection