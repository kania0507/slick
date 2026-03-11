@extends('layouts.app')

@section('content')

  @include('sections.hero')

  @include('sections.popular-products')

<p>@asset('images/hero-shoe.png')</p>
<p>{{ asset('images/hero-shoe.png') }}</p>

@endsection