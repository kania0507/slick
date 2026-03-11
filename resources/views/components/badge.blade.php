@props(['type' => 'default'])

@php
$classes = 'text-xs font-semibold px-2.5 py-1 rounded-full';

if ($type === 'sale') {
  $classes .= ' bg-red-500 text-white';
}

if ($type === 'new') {
  $classes .= ' bg-black text-white';
}
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</span>