<?php

require_once ('class-wp-bootstrap-navwalker.php');

if(!function_exists('wparzebtax_theme_setup')):
function wparzebtax_theme_setup() {
    register_nav_menus([
        'primary-menu' => 'Główne menu',
        'secondary-menu' => 'Drugie menu'
        ]);
}
endif;

add_action('after_setup_theme', 'wparzebtax_theme_setup'); ?>