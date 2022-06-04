<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>
        <title>home</title>
    </head>
    <body>
    <div id="app">
        <navbar-component></navbar-component>
        <download-component></download-component>
        <autocomplete-component ></autocomplete-component>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></link>
    </body>
</html>
