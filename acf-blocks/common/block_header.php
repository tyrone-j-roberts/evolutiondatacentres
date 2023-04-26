<?php
// Create id attribute allowing for custom "anchor" value.
$id = $block_slug . '--' . $block['id'];


if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}


// Create class attribute allowing for custom "className" and "align" values.
$classNames = '';

$classNames .= ' ' . $block_slug . '--block';
if (!empty($block['className'])) {
    $classNames .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classNames .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="clearfix <?php echo esc_attr(ltrim($classNames)) ?>">