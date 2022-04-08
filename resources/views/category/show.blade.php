@extends('layouts.app')

@section('title', $category->name)

@section('content')

    <h3> {{ $category->name }} </h3>

    @foreach($category->post as $post)
    <div>
        <div>
            <a href="{{ route('posts.show', ['post_id' => $post->id]) }}"><h3>{{ $post->title }}</h3></a>
            
        </div>
        <div>{{ $post->text }}</div>
        <div>Категория новости: {{ $post->category->name }}</div>
    </div>
    @endforeach
@endsection