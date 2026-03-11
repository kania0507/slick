<a href="{{ get_permalink($product->get_id()) }}"
   class="group block rounded-2xl border border-gray-200 p-6 hover:shadow-xl transition">

  <div class="aspect-square flex items-center justify-center">

    {!! $product->get_image(
      'woocommerce_single',
      [
        'class' => 'max-h-60 object-contain transition-transform duration-300 group-hover:scale-105'
      ]
    ) !!}

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