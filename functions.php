<?php

add_action('after_setup_theme', function() {

    add_image_size('insane-size', 2560, 1440, false);

});

add_action('template_redirect', function() {

    if (is_page('kontakt')) :
        wp_safe_redirect('/kontakt-2', 301);
        exit;
    endif;
    

});