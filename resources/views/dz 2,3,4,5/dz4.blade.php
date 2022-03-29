@extends('layouts.app')

@section('title', 'Задание 4')

@section('content')

@foreach ($arr as $name)
    <div>
        {{ $name }}
    </div>
@endforeach
@endsection