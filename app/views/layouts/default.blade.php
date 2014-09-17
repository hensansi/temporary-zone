<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temporary Zone</title>
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/base.css">
     <link rel="stylesheet" href="/css/perfect-scrollbar.css">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="/css/jquery.mousewheel.js"></script>
    <script src="/css/perfect-scrollbar.js"></script> 


</head>
<body>

    <header>
        @include('layouts.partials.nav')
        <h1 @yield('class')>Temporary <span>Zone</span></h1>
    </header>

    <div class="container cf">
        @yield('content')
    </div>

    <div class="main-background"></div>

</body>

 <script>$('.container').perfectScrollbar();</script>

</html>
