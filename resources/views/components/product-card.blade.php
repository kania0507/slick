@props(['product'])

@php
$discount = null;

if ($product->is_on_sale()) {
  $regular = (float) $product->get_regular_price();
  $sale = (float) $product->get_sale_price();

  if ($regular > 0) {
    $discount = round((($regular - $sale) / $regular) * 100);
  }
}
@endphp


<a href="{{ get_permalink($product->get_id()) }}"
   class="group block rounded-2xl border border-gray-200 p-6 hover:shadow-xl transition overflow-hidden">

<div class="relative aspect-square overflow-hidden flex items-center justify-center">

  @if($discount)
    <x-badge type="sale" class="absolute top-4 left-4 z-10">
      -{{ $discount }}%
    </x-badge>
  @endif

  @php
    $image_id = $product->get_image_id();
    $gallery = $product->get_gallery_image_ids();
    $second = $gallery[0] ?? null;
  @endphp

  {{-- main image --}}
  <img
    src="{{ wp_get_attachment_image_url($image_id, 'woocommerce_single') }}"
    class="w-full h-full object-contain transition duration-500 {{ $second ? 'group-hover:opacity-0 absolute inset-0' : '' }}"
  >

  {{-- hover image --}}
  @if($second)
  <img
    src="{{ wp_get_attachment_image_url($second, 'woocommerce_single') }}"
    class="absolute inset-0 w-full h-full object-contain opacity-0 transition duration-500 group-hover:opacity-100"
  >
  @endif

</div>

  <h3 class="mt-6 text-lg font-medium text-gray-900">
    {{ $product->get_name() }}
  </h3>

  <div class="mt-2 flex items-center justify-between">

    <span class="text-lg font-semibold">
      {!! $product->get_price_html() !!}
    </span>

    <span class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white group-hover:scale-110 transition">
      →
    </span>

  </div>

</a>