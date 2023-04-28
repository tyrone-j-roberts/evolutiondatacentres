<?php

$nav_args = array(
    'menu' => 'Main Menu',
    'theme_location'  => 'menu_main',
    'container'       => '',
    'menu_class'      => '',
    'echo'            => true,
    'items_wrap'      => '<ul class="orion-menu" id="%1$s" >%3$s</ul>',
    'add_li_class'  => '',
    'add_a_class' => 'menuLine',
    'item_spacing'    => 'preserve',
    'depth'           => 0,
);

?>

<header class="solid-header">
    <div class="container">
        <div class="solid-header__inner">
            <a class="solid-header__logo" href="<?= site_url(); ?>">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/evolution_logo.svg" alt="logo" />
            </a>
            <nav class="solid-header__nav">
                <?php wp_nav_menu($nav_args)  ?>
            </nav>
        </div>
    </div>
</header>