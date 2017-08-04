<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <title>Furbook</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>

    <body>
        <div class="container">
            <div id="banner">
                <header>
                    <p id="logo">Fur<span>Book</span></p>
                    <nav>
                        <a href="{{url('cats')}}">All Cats</a>
                    </nav>
                </header>
            </div>
            <div class="page-header">
                @yield('header')
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>