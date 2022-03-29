@extends('layouts.app')

@section('title', 'Регистрация пользователя')

@section('content')
<div>
    <h3>Регистрация</h3>
    <div><a href=" {{ route('users.get.login') }} ">Если вы зарегистрированы войдите через логин</a></div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=" {{ route('users.post.create') }} " method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="firstName" placeholder="Введите имя">
        </div>
        <div>
            <input type="text" name="lastName" placeholder="Введите фамилию">
        </div>
        <div>
            <input type="email" name="email" placeholder="Введите почту">
        </div>
        <div>
            <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <div>
            <input type="password" name="password_confirmation" placeholder="Повторите пароль">
        </div>
        <button type='submit'>Зарегистрироваться</button>
    </form>
</div>
@endsection