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
$button = get_field('button');

$block_slug = "large-text-image-and-button";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="gridContainerDigital2">
    <div class="centreWrapper">
        <h3 class="darkGrey"><?php echo $copy ?></h3>
        <div class="imageDigital2 block3"><img src="<?php echo $image['url'] ?>" alt="<img src=" <?php echo $image['alt'] ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height'] ?>"></div>
        <p><a href="<?php echo $button['url'] ?>" class="mainBut"><?php echo $button['title'] ?></a></p>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
