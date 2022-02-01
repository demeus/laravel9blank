<tr {{ $attributes->merge(['class' => $dark_mode ? 'bg-gray-200 dark:bg-dark-1' : '' ]) }}>
    {{ $slot }}
</tr>