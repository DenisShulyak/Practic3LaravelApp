<html>
<head>
    <link rel=stylesheet href='{{asset('storage/css/style.css')}}' type='text/css'>
    <title>@yield('title')</title>
</head>
<body>
<div class="header"><!--*****************Логотип и шапка********************-->
    Резюме и вакансии
    <div id="logo"></div>
</div>
    @yield('content')
    <div class="rightcol"><!--*******************Навигационное меню*******************-->
        <ul class="menu">
            <li><a href="/">Вакансии</a></li>
            <li><a href="/resume">Резюме по профессиям</a></li>
            <li><a href="">Резюме по возрасту</a></li>
            <li><a href="">Избранное резюме</a></li>
            <li><a href="/persons">Запрос 1</a></li>
            <li><a href="/stage">Запрос 2</a></li>
            <li><a href="/count">Запрос 3</a></li>
            <li><a href="/staff">Запрос 4</a></li>
        </ul>
    </div>
    <div class="footer">&copy; Copyright 2017</div>
</body>
</html>
