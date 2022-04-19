<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta property="og:title" content="@yield('title')">
    <meta property="twitter:card" content="@yield('title')">
    <meta property="twitter:title" content="@yield('title')">
    @include('partials.header')
</head>
<body>
    <div id="app">
        @include('partials.nav')
        @yield('maincontent')
    </div>
    @include('partials.footer')
</body>
</html>