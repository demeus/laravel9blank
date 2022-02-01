<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? '' }}  {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{!! asset("favicon.ico")!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset("favicon.ico")!!}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    @yield('head')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token ?? '' }}">
    @endauth
    <livewire:styles />
    @stack('after-styles')
</head>

<body>
{{ $slot }}
<livewire:scripts />
<script src="{{ mix('/js/app.js') }}"></script>
@stack('after-scripts')

</body>
</html>
