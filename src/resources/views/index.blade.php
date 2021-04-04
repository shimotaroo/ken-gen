<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- OGP --}}
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:image" content="{{ asset('/image/summary-image.jpg') }}">
    <meta property="og:description" content="{{ config('app.description') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta name="twitter:site" content="{{ config('app.url') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ config('app.name') }}">
    <meta name="twitter:image" content="{{ asset('/image/summary-image.jpg') }}">
    <meta name="twitter:description" content="{{ config('app.description') }}">
    <title>{{ config('app.name') }}</title>
    {{-- CSS --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app"></div>
</body>
</html>