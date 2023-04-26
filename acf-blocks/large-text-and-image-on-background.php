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
$image = get_field('image');

$block_slug = "large-text-and-image-on-background";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="gridContainerDigital6">

    <?php include(locate_template('/acf-blocks/common/background.php')); ?>

    <div class="centreWrapper">

        <div class="blockLeft3 txtLeft">
            <h6 class="darkGrey"><?php echo $copy ?></h6>
        </div>

        <div class="blockRight3">
            <img src="<?php echo $image['url'] ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
        </div>

    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
