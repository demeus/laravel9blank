<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? '' }} - {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{!! asset("favicon.ico")!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset("favicon.ico")!!}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
</head>

<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
            {{ $slot }}
        </div>
    </div>
</div>
</body>
</html>