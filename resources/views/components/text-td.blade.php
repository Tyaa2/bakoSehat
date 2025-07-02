@props([
    'value' => null,
    'fallback' => '-',
    'isDate' => false, // jika true, akan diformat sebagai tanggal
    'format' => 'd-m-Y',
])

@php
    $displayValue = $fallback;

    if ($value) {
        $displayValue = $isDate
            ? \Carbon\Carbon::parse($value)->format($format)
            : $value;
    }
@endphp

<td class="p-4 border-b border-gray-50">
    <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700">
        {{ $displayValue }}
    </p>
</td>
