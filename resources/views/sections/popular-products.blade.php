<section class="py-16">

<div class="container">

<h2 class="text-3xl font-semibold mb-10">
Popular Products
</h2>

<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

@foreach ($products as $product)

<x-product-card :product="$product" />

@endforeach

</div>

</div>

</section>