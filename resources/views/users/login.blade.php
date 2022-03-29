@extends('layouts.app')

@section('title', 'Вход в личный кабинет')

@section('content')

<div>
    <h3>Вход в личный кабинет</h3>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=" {{ route('users.post.login') }} " method="post">
        {{ csrf_field() }}
        <div>
            <input type="email" name="email" placeholder="Введите email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <div>
            <button type="submit">Войти</button>
        </div>
    </form>
</div>
@endsection