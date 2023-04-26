<?php

function setup_theme_setup_scripts_and_css()
{
	// Main stylesheet.
	wp_enqueue_style('main', get_stylesheet_uri(), false, '1.0.0', 'all');

	// GFonts
	wp_enqueue_style('gfonts', '//fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&amp;display=swap', false, '1.0.0', 'all');


	// Global Scripts
	wp_enqueue_script('orion-menu', get_template_directory_uri() . '/assets/js/orion-menu.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'setup_theme_setup_scripts_and_css');
