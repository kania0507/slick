<header class="container flex items-center justify-between py-6 z-50 bg-transparent">

  <div class="container mx-auto flex items-center justify-between py-6">

    {{-- Logo --}}
    <a class="text-xl font-semibold" href="{{ home_url('/') }}">
      {{ $siteName }}
    </a>

    {{-- Navigation --}}
    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden lg:flex">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex gap-8 text-sm font-medium',
          'container' => false,
          'echo' => false
        ]) !!}
      </nav>
    @endif

    {{-- Header actions --}}
  <div class="flex items-center gap-6">
  
    <button class="icon-btn">
      <x-icon name="search"/>
    </button>

    <a href="{{ wc_get_cart_url() }}" class="icon-btn">
      <x-icon name="cart"/>
    </a>

    <button class="icon-btn lg:hidden">
      <x-icon name="menu"/>
    </button>

  </div>

  </div>

</header>