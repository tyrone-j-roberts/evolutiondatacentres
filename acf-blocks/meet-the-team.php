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
$team_members = new WP_Query(array(
    'posts_per_page'    => -1,
    'post_type'            => 'team_member'
));


$block_slug = "meet-the-team";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<?php if ($team_members->have_posts()) : ?>


    <div class="gridContainerDigital7">

        <div class="centreWrapper">
            <div class="teamTitle">
                <?php echo $title ?>
            </div>
        </div>


        <?php
        $i = 0;
        ?>
        <?php while ($team_members->have_posts()) : $team_members->the_post(); ?>
            <?php
            $i++;
            $team_member_id = get_the_id()
            ?>

            <?php
            $firstname = get_field('firstname', $team_member_id);
            $lastname = get_field('lastname', $team_member_id);
            $job_title = get_field('job_title', $team_member_id);
            $bio = get_field('bio', $team_member_id);
            ?>

            <?php if ($i % 2) :  ?>

                <div class="centreWrapper">

                    <div class="blockRight3 block5 bMargin50">
                        <div class="teamImgWrap">
                            <?php the_post_thumbnail('full', ['class' => 'box-shadow', 'title' => $firstname . ' ' . $lastname]); ?>
                        </div>
                    </div>

                    <div class="blockLeft3 bMargin50">
                        <h4 class="darkGrey">
                            <?php echo $firstname ?> <span class="green"><?php echo $lastname  ?></span></h4>
                        <h5 class="darkGrey"><?php echo $job_title ?></h5>
                        <?php echo $bio ?>
                    </div>
                </div>
            <?php else : ?>

                <div class="centreWrapper">
                    <?php
                    $image_wrap_classes = "";
                    $image_inner_class = "";
                    if (($i / 2) % 3 == 0) { // every 3rd pink
                        // echo "top pink";
                        $image_wrap_classes = "blockLeft3c block9 bMargin50";
                        $image_inner_class = 'teamImgWrap';
                    } else {
                        // echo "bottom pink";
                        $image_wrap_classes = "blockLeft3c block7 bMargin50";
                        $image_inner_class = 'teamImgWrap2';
                    }
                    ?>
                    <div class="<?php echo $image_wrap_classes ?>">
                        <div class="<?php echo  $image_inner_class ?>">
                            <?php the_post_thumbnail('full', ['class' => 'box-shadow', 'title' => $firstname . ' ' . $lastname]); ?>
                        </div>
                    </div>

                    <div class="blockRight3c bMargin50">
                        <h4 class="darkGrey"><?php echo $firstname ?> <span class="pink"><?php echo $lastname  ?></span></h4>
                        <h5 class="darkGrey"><?php echo $job_title ?></h5>
                        <?php echo $bio ?>
                    </div>
                </div>
            <?php endif ?>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>

<?php endif ?>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
