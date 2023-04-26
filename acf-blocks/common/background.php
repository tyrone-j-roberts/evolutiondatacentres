<?php
// Background
$background_type = get_field('background_type');
$background_video = get_field('background_video');
$background_image_desktop = get_field('background_image_desktop');
$background_image_mobile = get_field('background_image_mobile');
?>

<div class="background <?php echo $background_type ?>">

    <?php if ($background_type == 'image') : ?>
        <div class="image desktop">
            <div><img src="<?php echo $background_image_desktop['url'] ?>" /></div>
        </div>
        <div class="image mobile">
            <div><img src="<?php echo $background_image_mobile['url'] ?>" /></div>
        </div>
    <?php endif ?>


    <?php if ($background_type == 'video') : ?>
        <div class="video-wrapper desktop">
            <video class="" id="video" loop muted autoplay playsinline poster="<?php echo $background_image_desktop['url'] ?>" width="<?php echo $background_image_desktop['width'] ?>" height="<?php echo $background_image_desktop['height'] ?>">
                <source id="mp4" src="<?php echo $background_video['url'] ?>" type="<?php echo $background_video['mime_type'] ?>">
            </video>
        </div>

        <div class="image mobile">
            <div><img class="mobile" src="<?php echo $background_image_mobile['url'] ?>" /></div>
        </div>

    <?php endif ?>
</div>