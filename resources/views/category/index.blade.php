@extends('layouts.app')

@section('title', 'Категории новостей')

@section('content')
    <div>
        <div>
            <a href=" {{ route('category.get.create') }} ">Создать категорию новости</a>
        </div>
        <div>
            <ul>
            @foreach ($category as $cat_name)
                <li> 
                    <a href=" {{ route('category.show', ['category_id' => $cat_name->id] ) }} ">{{ $cat_name->name }}</a> 
                </li>
                <a href=" {{ route('category.get.update', ['category_id' => $cat_name->id]) }} ">Изменить название категории</a>
                <a href=" {{ route('category.delete', ['category_id' => $cat_name->id]) }} ">Удаление категории новости</a>
            @endforeach
            </ul>
        </div>
    </div>
@endsection