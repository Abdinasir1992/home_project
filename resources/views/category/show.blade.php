@extends('layouts.app')

@section('title', $category->name)

@section('content')

    <h3> {{ $category->name }} </h3>
@endsection