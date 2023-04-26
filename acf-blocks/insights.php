<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$insights = new WP_Query(array(
    'posts_per_page'    => -1,
    'post_type'            => 'insight'
));


$block_slug = "insights";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="gridContainerDigital7">



    <?php if ($insights->have_posts()) : ?>
        <?php while ($insights->have_posts()) : $insights->the_post(); ?>

            <?php $button = get_field('button', get_the_ID()); ?>

            <div class="centreWrapper">
                <div class="blockLeft5">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="blockRight5 txtLeft">
                    <h5 class="green"><?php the_title() ?></h5>
                    <p>&nbsp;<br></p>
                    <?php the_content() ?>
                    <?php if ($button) : ?>
                        <p><a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>" class="mainBut"><?php echo $button['title'] ?></a></p>
                    <?php endif ?>
                </div>
                <div class="greyLineDiv2"></div>

            </div>
        <?php endwhile; ?>
    <?php endif ?>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
