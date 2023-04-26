<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$logo = get_field('logo');
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$text = get_field('text');


$block_slug = "homepage-intro";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="homepage-intro">
    <div class="homepage-intro__logo">
        <img src="<?php echo $logo['url'] ?>" alt="Evolution">
    </div>
    <div class="homepage-intro__text">
        <?= $text ?>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
