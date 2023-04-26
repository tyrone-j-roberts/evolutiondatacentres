<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data

$image_options = get_field('image_options');
$heading = get_field('heading');
$text = get_field('text');
$button = get_field('button');

$block_slug = "image-text-row";

include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="image-text-row">

    <?php if ($image_options['decoration_position'] == 'no-decoration'): ?>
    <span class="image-text-row__decoration"></span>
    <?php endif; ?>

    <div class="container image-text-row__container">
        <div class="image-text-row__image <?= $image_options['decoration_position'] ?>">
            <?php if ($image_options['decoration_position'] != 'no-decoration'): ?>
                <span class="decoration"></span>
            <?php endif; ?>
            <?php if ($image_options['image']): ?>
                <img src="<?= $image_options['image']['url'] ?>" alt="<?= $image_options['image']['alt'] ?>" />
            <?php endif; ?>
        </div>
        <div class="image-text-row__text">
            <?php if (!empty($heading)): ?>
                <h3><?= $heading ?></h3>
            <?php endif; ?>
            <?= $text; ?>
            <?php if (!empty($button['label'])): ?>
                <a class="button-link" href="<?= $button['url'] ?>"><?= $button['label'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
