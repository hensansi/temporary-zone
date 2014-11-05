<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Temporary Zone</title>
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="/css/style.css">
{{--
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="/js/perfect-scrollbar.css">
        <script src="/js/perfect-scrollbar.js"></script>--}}
    </head>
    <body>

        <header class="">
            <h1 class="">Temporary<span class="header__title--colored"> Zone</span></h1>
            @include('layouts.partials.nav')

            

        </header>

        <div class="container clearfix">
            @yield('content')
        <div class="main-background"></div>

        </div>
{{--
        <div class="footer"> 
            <svg  height="30" width="30">
                <circle class="circle" cx="15" cy="15" r="10"/>
            </svg>
        </div>--}}



{{--<script>
        $(function() {
        $('.container').perfectScrollbar();
    });
</script>--}}
    </body>
    
</html>
