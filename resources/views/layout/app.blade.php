<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <div class="container">
        <div class="row justify-content-center">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>The Test App</title>
            </head>
            <body>
                @yield('content')
            </body>
        </div>
    </div>
</html>