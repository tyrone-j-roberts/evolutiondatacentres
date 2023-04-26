<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data

// group



$block_slug = "icon-list-and-copy";
include(locate_template('/acf-blocks/common/block_header.php'));
?>


<div class="gridContainerDigital4 ">

    <?php include(locate_template('/acf-blocks/common/background.php')); ?>

    <div class="centreWrapperNarrow white">


        <div class="blockLeft">

            <?php if (have_rows('icon_list')) : ?>

                <?php while (have_rows('icon_list')) : the_row();
                    $icon = get_sub_field('icon');
                    $content =  get_sub_field('content')
                ?>
                    <div class="digital4wrap">
                        <div class="digital4icon">
                            <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" title="<?php echo $icon['title'] ?>" />
                        </div>
                        <div class="digital4text">
                            <h2 class="white"><?php echo $content['title'] ?></h2>
                            <p class="white"><?php echo $content['copy'] ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <?php $content = get_field("content"); ?>
        <div class="blockRight">
            <div class="digital4text2">
                <div class="white">
                    <h2 class="white"><?php echo $content['title'] ?></h2>
                    <?php echo $content['copy'] ?>
                    <p class="white">&nbsp;</p>
                    <p><a href="<?php echo $content['button']['url'] ?>" class="mainBut2"><?php echo $content['button']['title'] ?></a></p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
