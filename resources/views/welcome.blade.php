<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- KOMPO Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>
            <a href="{{ url('kompo-in-layout') }}">Direct Route Call</a>
        </div>

        <div id="app">
            <div class="container">
                {!! App\Http\Komposers\KompoDemoForm::render() !!}
            </div>
        </div>
    </body>

    <!-- KOMPO Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</html>
