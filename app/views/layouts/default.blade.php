<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Temporary Zone</title>
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="/css/style.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="/js/perfect-scrollbar.css">
        <script src="/js/perfect-scrollbar.js"></script>
    </head>
    <body>

        <header>
            @include('layouts.partials.nav')

            <h1 class="header__title @yield('class')">T<span class="header__title--colored">Z</span></h1>

        </header>

        <div class="container cf">
            @yield('content')
        </div>

        <div class="main-background"></div>
<script>
        $(function() {
        $('.container').perfectScrollbar();
    });    </script>
    </body>
    
</html>
