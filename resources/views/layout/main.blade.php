<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>
<body>
    <header class="container">
        <span class="logo">Блог спот</span>
        <nav>
            <a href="/">Главня страница </a>
            <a href="/about-us">Про нас </a>
            <a href="/article/add">Добавить статью</a>
            <a href="/shop">Товары</a>
        </nav>
    </header>

    

    <main class="container">
        @include('blocks.messages')
        @yield('content')
    </main>
    <footer>Все праа защищены</footer>
    <script src="/js/app.js"></script>
</body>
</html>