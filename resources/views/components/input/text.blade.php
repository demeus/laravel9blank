@props([
'leadingAddOn' => false,
])
<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            {!! $leadingAddOn !!}
        </span>
    @endif
    <input {{ $attributes->merge(['class' => 'form-control' . ($leadingAddOn ? ' rounded-none rounded-r-md' : '')]) }}/>
</div>