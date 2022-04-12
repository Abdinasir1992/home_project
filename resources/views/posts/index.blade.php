@extends('layouts.app')

@section('title', 'Все новости')

@section('content')
    <div>
        <h2>Все новости</h2>
        <div>
            <a href=" {{ route('posts.get.create') }} ">Добавить новость</a>
        </div>
        <div>
            <span class="message">
                @if(session()->has('message'))
                    {{ session()->get('message') }}
                @endif
            </span>
            
        </div>
        @foreach($posts as $post)
        <div>
            <div>
                <a href="{{ route('posts.show', ['post_id' => $post->id]) }}"><h3>{{ $post->title }}</h3></a>
                
            </div>
            <div>{{ $post->text }}</div>
            <div>Категория новости: {{ $post->category->name }}</div>
        </div>
        @endforeach
    </div>
@endsection
