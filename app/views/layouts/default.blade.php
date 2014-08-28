<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temporary Zone</title>
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <header>
        @include('layouts.partials.nav')
    </header>

        @yield('content')

        @include('layouts.partials.googleAnalytics')
</body>

</html>
