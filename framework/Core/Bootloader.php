<?php
namespace WPW\Core;

use WPW\WooCommerce\Product\DiscountInfo;
use WPW\WooCommerce\Product\PricePerKg;

class Bootloader
{

    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'initTheme']);
    }
    
    public function initTheme()
    {
        new PricePerKg();
        new DiscountInfo();
    }


}