@props([
'title' => null,
])
<x-layouts.base  title="{{ $title }}">
    {{ $slot }}
</x-layouts.base>
