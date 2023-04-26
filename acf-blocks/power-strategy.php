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
$introduction = get_field('introduction');
$image = get_field('image');
$copy = get_field('copy'); //repeater

$title_colurs_classes = ['green2', 'green', 'blue2', 'darkBlue'];

$block_slug = "power-strategy";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="gridContainerDigital6">

    <?php include(locate_template('/acf-blocks/common/background.php')); ?>

    <div class="centreWrapper txtLeft">
        <h5 class="darkGrey"><?php echo $title ?></h5>
        <?php echo $introduction ?>
    </div>

    <div class="centreWrapper">
        <div class="blockLeft1">
            <img src="<?php echo $image['url'] ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />

        </div>
        <div class="blockRight1 txtLeft">

            <?php $i = 0 ?>
            <?php if (have_rows('copy')) : ?>


                <?php while (have_rows('copy')) : the_row();
                    $title = get_sub_field('title');
                    $text =  get_sub_field('text');
                ?>

                    <p><strong class="<?php echo $title_colurs_classes[$i] ?>"><?php echo $title ?></strong><br><?php echo $text ?></p>

                <?php $i++;
                endwhile; ?>
            <?php endif; ?>


        </div>
    </div>

</div>



<?php include(locate_template('/acf-blocks/common/block_footer.php'));
