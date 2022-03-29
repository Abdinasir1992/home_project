<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserLoginRequest;

use Illuminate\Http\Request;

class UserController
{
    public function login()
    {
        return view('users.login');
    }

    public function store_login(UserLoginRequest $requiest)
    {
        $email = $requiest->post('email');
        $password = $requiest->post('password');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $firstName = $request->post('firstName');
        $lastName = $request->post('lastName');
        $email = $request->post('email');
        $password = $request->post('password');
        $password_confirmation = $request->post('password_confirmation');
    }

    public function edit()
    {
        echo "Страница изменения данных пользователя";
    }

    public function delete()
    {
        echo "Страница удаления пользователя";
    }
}