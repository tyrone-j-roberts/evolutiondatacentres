<?php
function register_my_menus()
{
	register_nav_menus(
		array(
			'menu_main'  => __('Menu Main'),
			'menu_footer_left'  => __('Menu Footer Left'),
			'menu_footer_right'  => __('Menu Footer Right'),
		)
	);
}
add_action('init', 'register_my_menus');
