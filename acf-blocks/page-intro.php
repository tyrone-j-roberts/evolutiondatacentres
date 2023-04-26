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
$background_class = get_field('background_colour');

$block_slug = "banner";
include(locate_template('/acf-blocks/common/block_header.php')); ?>
 

<div class="gridContainerDigital2 <?= $background_class ?>">
    <div class="centreWrapperNarrow <?= $background_class == 'whiteBG' ? 'darkgrey' : 'white' ?>">
        <h3><?= $copy ?></h3>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
