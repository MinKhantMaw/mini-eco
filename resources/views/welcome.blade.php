<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecommerce</title>
        @vite('resources/css/app.css')
    </head>
    <body class="">
        <livewire:header/>
        <livewire:hero-section/>
    </body>
</html>
