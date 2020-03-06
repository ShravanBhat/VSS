<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <header class="masthead text-center text-white d-flex" style="background-image:url('farmhome.jpg');height:90vh;">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>Your Farm Managing System in Pocket</strong></h1>
                    <hr />
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">We can manage crops you grow help you for better profit</p><a class="btn btn-success btn-xl" role="button">Find Out More</a></div>
            </div>
        </header>
</body>