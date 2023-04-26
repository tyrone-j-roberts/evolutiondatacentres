<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
// $title = get_field('title');
// $copy = get_field('copy');
// $button = get_field('button');

$block_slug = "{block-slug-here}";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


BLOCK CONTENT HERE.

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
