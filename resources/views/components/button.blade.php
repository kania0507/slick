@props([
  'href' => null,
  'variant' => 'primary'
])

@php
$classes = [
  'inline-flex items-center justify-center px-6 py-3 !rounded-md font-medium transition',
  'hover:scale-105 hover:shadow-lg',
  'focus:outline-none focus:ring-2 focus:ring-black/20',
];

if ($variant === 'primary') {
  $classes[] = 'bg-black text-white';
}

if ($variant === 'secondary') {
  $classes[] = 'bg-gray-100 text-black';
}

@endphp

@if ($href)
<a href="{{ $href }}" {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
  {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
  {{ $slot }}
</button>
@endif