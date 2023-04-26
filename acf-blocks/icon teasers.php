<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$title = get_field('teasers');
$button = get_field('button');

$block_slug = "icon-teasers";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="gridContainerDigital4">
    <div class="centreWrapper">


        <?php if (have_rows('teasers')) : ?>

            <?php while (have_rows('teasers')) : the_row();
                $icon = get_sub_field('icon');
                $title =  get_sub_field('title');
                $copy =  get_sub_field('copy');
            ?>
                <div class="greenIconWrap">
                    <div class="greenIcon">
                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" title="<?php echo $icon['title'] ?>" />
                    </div>
                    <h5 class="darkGrey"><?php echo $title ?></h5>
                    <?php echo $copy ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


    </div>
    <div class="centreWrapper">
        <a href="<?php echo $button['url'] ?>" class="mainBut"><?php echo $button['title'] ?></a>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
