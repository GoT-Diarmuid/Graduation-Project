<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','Project')}}</title>
    </head>

    <body>
        @include('theme.navbar')
        <div>
            <a class=" btn btn-outline-primary  my-2 my-sm-0" href="/login" role="button">Login</a>
            </div>
          </div>
        </nav>
        @yield('content')
    </body>
</html>
