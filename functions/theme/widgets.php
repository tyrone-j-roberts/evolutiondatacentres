<?php
//add_action('widgets_init', 'wb_widgets_init');

function wb_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Blog Posts Sidebar', 'evolution'),
		'id'            => 'blog-posts',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}
