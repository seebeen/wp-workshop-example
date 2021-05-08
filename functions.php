<?php

add_action('after_setup_theme', function() {

    add_image_size('insane-size', 2560, 1440, false);
    add_image_size('micro-size', 10, 10, true);

});