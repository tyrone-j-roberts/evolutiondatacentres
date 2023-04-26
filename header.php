<?php
$imagePath = get_template_directory_uri() . '/assets/images/';
$iconPath = $imagePath . 'ico/';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="format-detection" content="telephone=no">
    <link href="http://gmpg.org/xfn/11" rel="profile" />
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
    <?php wp_head(); ?>


    <!-- <link rel="shortcut icon" href="<?php echo $iconPath ?>favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo $iconPath ?>apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $iconPath ?>apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $iconPath ?>apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $iconPath ?>apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $iconPath ?>apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $iconPath ?>apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $iconPath ?>apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $iconPath ?>apple-touch-icon-152x152.png" />  -->

</head>

<body <?php body_class(); ?>>