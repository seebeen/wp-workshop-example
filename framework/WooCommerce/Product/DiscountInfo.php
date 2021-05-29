<?php
namespace WPW\WooCommerce\Product;

class DiscountInfo
{

    public function __construct()
    {
        add_action('woocommerce_after_add_to_cart_form', [$this, 'showDiscountInfo'], 99);   
    }

    public function showDiscountInfo()
    {
        ?>
        <p>Ako kupite dva artikla, drugi cete dobiti po ceni prvog</p>
        <?php
    }

}