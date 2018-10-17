<?php 

    function moekyawsoe_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

add_action('wp_enqueue_scripts', 'moekyawsoe_resources');

//Navigation menus

register_nav_menus(array(

	'primary' => __('primary Menu'),
	'footer' => __('footer Menu'),

));

