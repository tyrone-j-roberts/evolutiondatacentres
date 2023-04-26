<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$team_members = get_posts([
    'post_type' => 'team_member',
    'posts_per_page' => -1
]);

$block_slug = "meet-the-team-grid";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="meet-the-team-grid">
    <div class="meet-the-team-grid__text">
        <h3>The team</h3>
        <p>
            Founded in 2021 by a team with over 25 years experience of the Asian Data Centre market, Evolution’s management team has a proven track record of developing, capitalising, and operating large scale colocation facilities built over +25 years’ experience in the Asian Data Centre market.
        </p>
        <p>&nbsp;</p>
        <p>
            Evolution was established to address two key challenges; the lack of quality data centre capacity in emerging Asian markets and the critical need for sustainable infrastructure in the region.
        </p>
    </div>
    <div class="meet-the-team-grid__grid">
        <?php foreach ($team_members as $team_member): ?>
            <div class="team-member">
                <div class="team-member__image">
                    <img src="<?= get_the_post_thumbnail_url( $team_member, 'medium' ) ?>" alt="<?= $team_member->post_title ?>" />
                    <div class="frame" style="background-image: url('<?= get_stylesheet_directory_uri() . '/assets/images/team-member-image-frame.png' ?>');"></div>
                </div>
                <div class="team-member__details">
                    <h4><?= $team_member->post_title; ?></h4>
                    <p><?= get_field('job_title', $team_member); ?></p>
                </div>
                <a class="connect-button" href="<?= get_field('linkedin_url') ?>" target="_blank">
                    <span>Connect Here</span>
                    <img class="icon" src="data:image/svg+xml,%3Csvg width='100%25' height='100%25' viewBox='0 0 416 416' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xml:space='preserve' xmlns:serif='http://www.serif.com/' style='fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;'%3E%3Cg transform='matrix(0.9226,0,0,0.9226,-0.11923,-0.405824)'%3E%3Cpath d='M225.129,0.44C349.31,0.44 450.129,101.259 450.129,225.44C450.129,349.621 349.31,450.44 225.129,450.44C100.948,450.44 0.129,349.621 0.129,225.44C0.129,101.259 100.948,0.44 225.129,0.44ZM158.967,370.05L98.96,370.05L98.96,176.808L158.967,176.808L158.967,370.05ZM383.621,370.05L323.678,370.05L323.678,275.981C323.678,253.562 323.226,224.812 292.479,224.812C261.28,224.812 256.499,249.169 256.499,274.366L256.499,370.05L196.556,370.05L196.556,176.808L254.109,176.808L254.109,203.168L254.949,203.168C262.96,187.985 282.53,171.963 311.726,171.963C372.457,171.963 383.621,211.955 383.621,263.899L383.621,370.05ZM128.931,150.448C109.743,150.448 94.179,134.555 94.179,115.366C94.179,96.302 109.867,80.614 128.931,80.614C147.996,80.614 163.684,96.302 163.684,115.366C163.684,134.555 148.113,150.448 128.931,150.448Z' style='fill:white;'/%3E%3C/g%3E%3C/svg%3E%0A" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
