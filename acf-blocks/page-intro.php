<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$copy = get_field('copy');
$text_size = get_field('text_size');

if (empty($text_size)) {
    $text_size = 'text-large';
}

$block_slug = "banner";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="gridContainerDigital2 greenBG">
    <div class="centreWrapperNarrow">
        <?php if ($text_size == 'text-large'): ?>
        <h3><?= $copy ?></h3>
        <?php elseif ($text_size == 'text-normal'): ?>
        <p><?= $copy ?></p>
        <?php endif; ?>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
