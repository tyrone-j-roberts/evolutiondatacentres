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
$strapline = get_field('strapline');


// Options
$home_hero = get_field("home_hero");



$block_slug = "logo-hero";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="headWrap">
    <!----------HEAD CONTENT--------->
    <div class="gridContainerHeadSite">

        <?php include(locate_template('/acf-blocks/common/background.php')); ?>


        <div class="mainHead">
        

            <div class="<?php echo ($home_hero ? 'titlesWrapper'  : 'titlesWrapperSite') ?>">
                <!-- <div class="titlesWrapperTitles"> -->

                <img src="/wp-content/themes/evolution-data-centres/assets/images/evolution_logo.svg" alt="Evolution">

                <?php if ($title) : ?>
                    <h1 class="title"><?php echo $title ?></h1>
                    <?php if ($strapline) : ?>
                        <h2 class="strapline"><?php echo $strapline ?></h2>
                    <?php endif ?>
                <?php else : ?>
                    <?php if ($strapline) : ?>
                        <h1 class="strapline"><?php echo $strapline ?></h1>
                    <?php endif ?>

                <?php endif ?>

                <!-- </div> -->
            </div>
        </div>
    </div>
</div>



<?php
include(locate_template('/acf-blocks/common/block_footer.php'));
