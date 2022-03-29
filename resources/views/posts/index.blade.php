@extends('layouts.app')

@section('title', 'Все новости')

@section('content')
    <div>
        <h2>Все новости</h2>
        <div>
            <a href=" {{ route('posts.get.create') }} ">Добавить новость</a>
        </div>
        @foreach($posts as $post)
        <div>
            <div>
                <a href="{{ route('posts.show', ['post_id' => $post->id]) }}"><h3>{{ $post->title }}</h3></a>
                
            </div>
            <div>{{ $post->text }}</div>
        </div>
        @endforeach
    </div>
@endsection
