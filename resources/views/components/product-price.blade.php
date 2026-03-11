@props(['product'])

<span class="text-lg font-semibold text-gray-900">
  {!! $product->get_price_html() !!}
</span>