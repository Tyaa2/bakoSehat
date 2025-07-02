@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group flex rounded-xl bg-black p-2 text-white hover:text-black hover:bg-gray-300'
            : 'group flex rounded-xl text-[#64748B] p-2 hover:bg-black hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
