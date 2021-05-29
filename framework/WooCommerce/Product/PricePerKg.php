<?php
namespace WPW\WooCommerce\Product;

use WC_Product;

class PricePerKg
{

    public function __construct()
    {

        add_action('woocommerce_before_add_to_cart_form', [$this, 'addPricePerKg'], 99);

    }

    public function addPricePerKg()
    {

        /** @var WC_Product $product */
        global $product;

        $price_per_g = $product->get_price() / $product->get_weight();

        $price_per_kg = $price_per_g * 1000;

        printf(
            'Cena po kilogramu je: <strong>%s</strong>',
            wc_price($price_per_kg)
        );


    }

}