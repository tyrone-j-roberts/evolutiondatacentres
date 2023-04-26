<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$row_1_image_1 = get_field("row_1_image_1");
$row_1_image_2 = get_field("row_1_image_2");
$row_1_copy = get_field("row_1_copy");
$row_2_image_1 = get_field("row_2_image_1");
$row_2_copy = get_field("row_2_copy");
$row_2_image_2 = get_field("row_2_image_2");
$row_3_copy = get_field("row_3_copy");
$row_3_image_1 = get_field("row_3_image_1");
$row_3_image_2 = get_field("row_3_image_2");

$block_slug = "3-by-3-grid";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="gridContainerDigital3-1">
    <div class="centreWrapper">

        <div class="iconsWrapper2">
            <div class="iconsWrap2">
                <div class="iconsInner2 iconsNoMob">
                    <img src="<?php echo $row_1_image_1['url'] ?>" width="<?php echo $row_1_image_1['width'] ?>" height="<?php echo $row_1_image_1['height'] ?>" alt="<?php echo $row_1_image_1['alt'] ?>" title="<?php echo $row_1_image_1['title'] ?>" />
                </div>
            </div>
            <div class="iconsWrap2">
                <div class="iconsInner2">
                    <img src="<?php echo $row_1_image_2['url'] ?>" width="<?php echo $row_1_image_2['width'] ?>" height="<?php echo $row_1_image_2['height'] ?>" alt="<?php echo $row_1_image_2['alt'] ?>" title="<?php echo $row_1_image_2['title'] ?>" />

                </div>
            </div>
            <div class="iconsWrap3">
                <div class="iconsInner2">
                    <div class="iconsInnerBlock">
                        <h2><?php echo $row_1_copy['title'] ?></h2>
                        <?php echo $row_1_copy['copy'] ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="gridContainerDigital3-2">
    <div class="centreWrapperHome">

        <div class="iconsWrapper2">
            <div class="iconsWrap2 block4">
                <div class="iconsInner3">
                    <img src="<?php echo $row_2_image_1['url'] ?>" width="<?php echo $row_2_image_1['width'] ?>" height="<?php echo $row_2_image_1['height'] ?>" alt="<?php echo $row_2_image_1['alt'] ?>" title="<?php echo $row_2_image_1['title'] ?>" />
                </div>
            </div>
            <div class="iconsWrap3">
                <div class="iconsInner4">
                    <div class="iconsInnerBlock">
                        <h2><?php echo $row_2_copy['title'] ?></h2>
                        <?php echo $row_2_copy['copy'] ?>
                    </div>
                </div>
            </div>
            <div class="iconsWrap2">
                <div class="iconsInner3">
                    <img src="<?php echo $row_2_image_2['url'] ?>" width="<?php echo $row_2_image_2['width'] ?>" height="<?php echo $row_2_image_2['height'] ?>" alt="<?php echo $row_2_image_2['alt'] ?>" title="<?php echo $row_2_image_2['title'] ?>" />
                </div>
            </div>
        </div>

    </div>
</div>

<div class="gridContainerDigital3-3">
    <div class="centreWrapperHome">
        <div class="iconsWrapper2">
            <div class="iconsWrap3">
                <div class="iconsInner5">
                    <div class="iconsInnerBlock">
                        <h2><?php echo $row_3_copy['title'] ?></h2>
                        <?php echo $row_3_copy['copy'] ?>
                    </div>
                </div>
            </div>
            <div class="iconsWrap2">
                <div class="iconsInner3">
                    <img src="<?php echo $row_3_image_1['url'] ?>" width="<?php echo $row_3_image_1['width'] ?>" height="<?php echo $row_3_image_1['height'] ?>" alt="<?php echo $row_3_image_1['alt'] ?>" title="<?php echo $row_3_image_1['title'] ?>" />

                </div>
            </div>

            <div class="iconsWrap2 iconsNoMob">
                <div class="iconsInner3">
                    <img src="<?php echo $row_3_image_2['url'] ?>" width="<?php echo $row_3_image_2['width'] ?>" height="<?php echo $row_3_image_2['height'] ?>" alt="<?php echo $row_3_image_2['alt'] ?>" title="<?php echo $row_3_image_2['title'] ?>" />
                </div>
            </div>
        </div>

    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
