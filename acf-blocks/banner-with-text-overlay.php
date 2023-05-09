<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$title = get_field('title');
$copy = get_field('copy');
$copy_border_style = get_field('copy_border_style');
$image = get_field('image');

$copy_border_css = '';
if ($copy_border_style == 'green') {
    $copy_border_css = 'blockRight3a block5';
}
if ($copy_border_style == 'pink') {
    $copy_border_css = 'blockRight3b block6';
}


$block_slug = "banner-with-text-overlay";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="gridContainerDigital4 darkBlueBG">

    <?php include(locate_template('/acf-blocks/common/background.php')); ?>

    <div class="centreWrapper clearfix white">

        <?php if (!empty($image)): ?>
        <div class="blockLeft3">
            <div class="image-wrapper">
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
            </div>
        </div>
        <?php endif; ?>

        <div class="<?php echo $copy_border_css ?>">
            <h4 class="white"><?php echo $title ?></h4>
            <?php echo $copy ?>
        </div>

    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
