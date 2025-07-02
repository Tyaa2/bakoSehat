@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block transition-colors text-blue-600 hover:text-black'
            : 'block transition-colors hover:text-blue-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
