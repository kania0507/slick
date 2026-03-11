@if (has_nav_menu('primary_navigation'))

  {!! wp_nav_menu([
    'theme_location' => 'primary_navigation',
    'menu_class' => 'flex gap-8 text-sm font-medium',
    'container' => false
  ]) !!}

@endif