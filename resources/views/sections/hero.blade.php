<section class="relative overflow-hidden py-24">

  {{-- background --}}
  <div class="absolute inset-0 bg-gradient-to-r from-gray-50 to-gray-200"></div>

  {{-- big background word --}}
  <div class="absolute inset-0 flex items-center justify-end pointer-events-none">

  <span class="hero-word">
    ULTIMATE
  </span>

  </div>

  <div class="relative container mx-auto grid lg:grid-cols-2 gap-16 items-center">

    {{-- LEFT --}}
    <div>

      <h1 class="text-5xl lg:text-6xl font-bold leading-tight">
        Find Your <br>
        Sole Mate <br>
        With Us
      </h1>

      <p class="mt-6 text-gray-500 max-w-md text-lg">
        Discover the latest sneakers and find the perfect pair
        that matches your style.
      </p>

	<x-button
  	class="mt-10"
  	:href="get_permalink(wc_get_page_id('shop'))">
  	Shop Now
	</x-button>

    </div>

    {{-- RIGHT --}}
    <div class="relative flex justify-center">
	<div class="absolute w-72 h-72 bg-gray-300 blur-3xl rounded-full opacity-40"></div>
      <img
        src="{{ Vite::asset('resources/images/hero-shoe.png') }}"
        alt="Sneakers"
        class="max-w-lg drop-shadow-2xl animate-float"
      >

      <div class="absolute -bottom-6 text-center">
        <p class="text-xl font-semibold">
          Trendy Slick Pro
        </p>

        <p class="text-gray-500 text-lg">
          ₹ 3999.00
        </p>
      </div>

    </div>

  </div>

</section>