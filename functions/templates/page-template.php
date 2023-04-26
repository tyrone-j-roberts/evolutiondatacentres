<?php
function evolution_page_template()
{
    $post_type_object = get_post_type_object('page');
    $post_type_object->template = array(
        array('acf/hero')
    );
}
add_action('init', 'evolution_page_template');
