<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$content = get_field('content');
$title = $content['title'];
$quote =  $content['quote'];
$slider_gallery = get_field('slider_gallery');

$block_slug = "quote-and-slider";
include(locate_template('/acf-blocks/common/block_header.php')); ?>


<div class="gridContainerDigital5">

    <div class="blockLeft2wrap">
        <div class="blockLeft2">
            <div class="blockLeft2inner">
                <h1><?php echo $title ?></h1>
                <div class="digital5left">
                    <h3><?php echo $quote ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="blockRight2">

        <div class="cycle-slideshow-outer">
            <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="500" data-cycle-pause-on-hover="true" data-cycle-timeout="5000" data-cycle-slides="section">
                <div class="cycle-prev"></div>
                <div class="cycle-next"></div>

                <?php if ($slider_gallery) : ?>

                    <?php foreach ($slider_gallery as $image) : ?>
                        <section>
                            <div class="sliderMainContainer" style="background-image:url(<?php echo $image['url'] ?>)">
                                <div class="sliderGridContainer clearfix">
                                    <div class="sliderInnerContainer">
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach; ?>

                <?php endif; ?>


            </div>
        </div>

    </div>

</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
