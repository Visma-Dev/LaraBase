<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Подключаем Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- указываем путь с помощью хелпера asset -->

    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <nav class="navbar navbar-light bg-light">
            <ul class="navbar-nav">
                <!-- Ссылаемся на необходимые нам страницы, благодаря именованным роутам -->
                <li class="nav-item"><a href="{{ route('main.index') }}">Main</a></li>
                <li class="nav-item"><a href="{{ route('post.index') }}">Posts</a></li>
                <li class="nav-item"><a href="{{ route('about.index') }}">About</a></li>
                <li class="nav-item"><a href="{{ route('contact.index') }}">Contacts</a></li>
            </ul>
        </nav>
    </div>

    <!-- директива yield используется для отображения содержимого секции, предоставленного дочерним шаблоном. -->
    @yield('content')
</div>

</body>
</html>
