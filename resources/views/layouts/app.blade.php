<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
</head>
<body>
<div id="app">
    <x-ui::navbar :menu="$menu" :languages="$languages" />

    @if(isset($breadcrumbs))
        <div class="bg-light p-3 border-bottom">
            {{ $breadcrumbs }}
        </div>
    @endif

    {{ $slot }}
</div>
</body>
</html>
