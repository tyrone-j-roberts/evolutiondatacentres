<?php

add_theme_support('align-wide');
add_theme_support("disable-custom-font-sizes");
add_theme_support("disable-drop-cap");

// Add CSS to admin area.
function Evolution_admin_css_setup()
{
  // Add support for editor styles.
  add_theme_support('editor-styles');

  // Enqueue editor styles.
  add_editor_style('editor.css');
}
add_action('after_setup_theme', 'Evolution_admin_css_setup');



// Disable Custom Colors
add_theme_support('disable-custom-colors');

// Editor Color Palette
add_theme_support('editor-color-palette', array(
  array(
    'name'    => __('White', 'Evolution'),
    'slug'    => 'white',
    'color'    => '#FFFFFF',
  ),
  array(
    'name'    => __('Dark gray', 'Evolution'),
    'slug'    => 'red',
    'color'    => '#444',
  ),
  array(
    'name'  => __('Blue', 'Evolution'),
    'slug'  => 'blue',
    'color'    => '#007cb8',
  ),
));


// Disable font sizes
add_action('after_setup_theme', 'wpse_remove_custom_colors');
function wpse_remove_custom_colors()
{
  // removes the text box where users can enter custom pixel sizes
  add_theme_support('disable-custom-font-sizes');
  // forces the dropdown for font sizes to only contain "normal"
  add_theme_support('editor-font-sizes', array(
    array(
      'name' => 'Normal',
      'size' => 16,
      'slug' => 'normal'
    )
  ));
}


// Remove Drop cap
add_action('admin_footer', function () {
  echo <<<HTML
<script>
document.addEventListener("DOMContentLoaded", function () {
  var removeDropCap = function(settings, name) {
    if (name !== "core/paragraph") {
      return settings;
    }
    var newSettings = Object.assign({}, settings);
    if (
      newSettings.supports &&
      newSettings.supports.__experimentalFeatures &&
      newSettings.supports.__experimentalFeatures.typography &&
      newSettings.supports.__experimentalFeatures.typography.dropCap
    ) {
      newSettings.supports.__experimentalFeatures.typography.dropCap = false; 
    }
    return newSettings;
  };
  wp.hooks.addFilter(
    "blocks.registerBlockType",
    "sc/gb/remove-drop-cap",
    removeDropCap,
  );
});
</script>
HTML;
});

function evolution_block_category($categories)
{
  return array_merge(
    [
      [
        'slug'  => 'evolution-blocks',
        'title' => __('Evolution Blocks', 'evolution-blocks'),
      ],
    ],
    $categories
  );
}
add_action('block_categories', 'evolution_block_category', 10, 2);
