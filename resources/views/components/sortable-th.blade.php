@props([
    'label',
    'column',
    'currentSort' => null,
    'currentDirection' => 'asc',
    'routeName',
    'filter' => null,
])

@php
    $newDirection = $currentSort === $column && $currentDirection === 'asc' ? 'desc' : 'asc';
@endphp

<th
    class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
    <a href="{{ route($routeName, ['sort' => $column, 'direction' => $newDirection, 'filter' => $filter]) }}"
        class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
        <span>{{ $label }}</span>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="w-4 h-4 transition duration-200">
            <!-- Panah atas -->
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 15L12 18.75 15.75 15"
                class="{{ $currentSort === $column && $currentDirection === 'asc'
                    ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                    : 'stroke-gray-400' }}" />
            <!-- Panah bawah -->
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 9L12 5.25 15.75 9"
                class="{{ $currentSort === $column && $currentDirection === 'desc'
                    ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                    : 'stroke-gray-400' }}" />
        </svg>
    </a>
</th>
