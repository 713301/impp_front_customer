<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'API Documentation App') }}</title>
    
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/customer.css') }}" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    <body>
        <div id="app" class="flex-center position-ref full-height container">
            <div class="content">
                <router-view></router-view>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>