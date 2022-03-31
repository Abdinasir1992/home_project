<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <style>
        body {
            padding-top: 30px;
            width: 1200px;
            margin: auto;
        }
        header div, header ul li, footer ul li {
            display: inline-block;
            /* float:left; */
        }
        .category ul li{
            margin-right: 40px;
        }
        .category {
            margin-top: 50px;
        }
        footer ul li {
            margin-right: 40px;
        }
        header, footer {
            text-align: center;
        }
        .container div {
            display: inline-block;
        }
    </style>
</head>
<body>
    @section('header')
    <header>
        <div>
            <a href="{{ route('main')}}">
                <img src="https://24.kg/assets/7a772a43/images/logo.png" alt="#">
            </a>    
        </div>
        <div class="category">
            <ul>
                <li><a href=" {{route('posts.index')}} " alt="">Все новости</a></li>
                <li><a href=" {{route('category.index')}} " alt="">Категории новостей</a></li>
                <li>Общество</li>
                <li>Политика</li>
                <li>Культура</li>
                <li>Спорт</li>
                <li>
                    <a href=" {{ route('users.get.create') }} ">Вход/Регистрация</a>
                </li>
            </ul>            
        </div>        
    </header>
    @show

    <div class="container">
        
        <div>
            @yield('content')
        </div>
        
    </div>

    @section('footer')
    <footer>
        <div>
            <ul>
                <li>
                    <a href=" {{ route('home.aboutUs') }} ">О нас</a>
                </li>
                <li>Контакты</li>
                <li>Партнеры</li>
                <li>Архив новостей</li>
            </ul>
        </div>
    </footer>
    @show
</body>
</html>