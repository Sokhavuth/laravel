<!--resoureces/views/admin/partials/head.blade.php-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $siteTitle }}</title>
        <link href="{{ asset('styles/global.css') }}" rel='stylesheet' />
        <link href="{{ asset('images/site_logo.png') }}" rel='icon' />
        <link href="{{ asset('fonts/setup.css') }}" rel='stylesheet' />
        <script src="{{ asset('scripts/jQuery.js') }}"></script>
        <link href="{{ asset('styles/admin/partials/header.css') }}" rel='stylesheet' />
    </head>
    <body>
    <div class='Site region'>

    <div class='Title'>
        <div class='wrapper'>
            <a href='<?php echo url("/") ?>'>{{ $siteTitle }}</a>
            
        </div>
    </div>

    