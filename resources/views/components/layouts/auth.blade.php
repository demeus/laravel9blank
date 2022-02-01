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
    @yield('head')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
</head>

<body>
<div class="min-h-screen flex flex-col items-center justify-center">
    <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
        {{ $slot }}
    </div>
</div>
</body>

</html>
