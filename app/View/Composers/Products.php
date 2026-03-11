<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WC_Product_Query;

class Products extends Composer
{
    protected static $views = [
        'sections.popular-products',
    ];

    public function with()
    {
        return [
            'products' => $this->products(),
        ];
    }

    public function products()
    {
        $query = new WC_Product_Query([
            'limit' => 8,
            'status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        return $query->get_products();
    }
}