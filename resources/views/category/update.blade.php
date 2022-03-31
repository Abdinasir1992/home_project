@extends('layouts.app')

@section('title', "Изменение названия категории")

@section('content')
<div>
    <h3>Изменение название категории</h3>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=" {{ route('category.post.update', ['category_id' => $category_id]) }} " method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Введите категорию новости" value=" {{ $category->name}} ">
        </div>
        <button type="submit">Изменить</button>
    </form>
</div>


@endsection