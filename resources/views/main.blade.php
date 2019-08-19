<!doctype html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

@include('head')

<body>

<div class="container">
    @include('nav')

    @if(session()->has('message'))
        <div class="alert alert-success" role="alert" style="padding: 5px; margin-top: 10px">
            <strong>Success </strong> {{session()->get('message')}}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>