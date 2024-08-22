<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Temporary Zone</title>
        <meta name="description" content="Henrique Silva temporary and in ever evolution portfolio">
        <link rel="shortcut icon" href="/images/favicon.ico">
       
        <meta name="fullcss"  content="/css/enhanced.css">
    
            @include('layouts.partials.critical')
            @include('layouts.partials.enhance')


    </head>
    <body>

        <div class="header">
            <h1 class="">Temporary<span class="header__title--colored"> Zone</span></h1>
            @include('layouts.partials.nav')

            

        </div>

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

            @include('layouts.partials.googleAnalytics')

    </body>
    
</html>
