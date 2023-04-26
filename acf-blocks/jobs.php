<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get Field data
$jobs = new WP_Query(array(
    'posts_per_page'    => -1,
    'post_type'            => 'job'
));
$no_jobs_message = get_field("no_jobs_message");


$block_slug = "jobs";
include(locate_template('/acf-blocks/common/block_header.php')); ?>





<!-- copy
email_apply_to -->

<?php if ($jobs->have_posts()) : ?>


    <?php while ($jobs->have_posts()) : $jobs->the_post(); ?>
        <?php $job_id = $team_member_id = get_the_id() ?>
        <div class="gridContainerDigital7">
            <div class="centreWrapper">


                <div class="blockLeft5">
                    <?php the_post_thumbnail('full') ?>

                </div>
                <div class="blockRight5 txtLeft">
                    <h5 class="green"><?php the_title() ?></h5><br>
                    <?php the_field('copy', $job_id); ?>
                    <br><br>

                    <p><a href="mailto:<?php the_field('email_to_apply_to', $job_id) ?>?subject=Job Application: <?php the_title() ?>" class="mainBut">Apply Now</a></p>

                </div>
            </div>

        <?php endwhile ?>
        </div>

    <?php else : ?>
        <div class="gridContainerDigital7">
            <div class="centreWrapper">
                <?php echo $no_jobs_message; ?>
            </div>
        </div>
    <?php endif; ?>




    <?php include(locate_template('/acf-blocks/common/block_footer.php'));
