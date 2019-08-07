<!doctype html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

@include('head')

<body>

    <div class="container">
        @include('nav')
        @yield('content')
    </div>

</body>
</html>