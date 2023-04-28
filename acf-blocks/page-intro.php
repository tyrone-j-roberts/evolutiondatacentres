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

$block_slug = "banner";
include(locate_template('/acf-blocks/common/block_header.php')); ?>
 

<div class="gridContainerDigital2 greenBG">
    <div class="centreWrapperNarrow">
        <h3><?= $copy ?></h3>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
