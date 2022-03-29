<!-- задача 3: -->
@extends('layouts.app')

@section('title', 'Задание 3')

@section('content')

@if ($a > 2)
    Значение переменной больше 2
@else 
    Значение переменной меньше 2
@endif
@endsection

