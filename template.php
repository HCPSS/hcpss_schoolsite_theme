<?php
/**
 * @file
 * HCPSS School Site starter theme template.php
 *
 * Contains preprocessing, processing, and anything else you might need to do.
 */

function hcpss_schoolsite_theme_js_alter(&$js) {
    unset($js['settings']);
}

function hcpss_schoolsite_theme_process_html(&$vars) {
    $vars['styles'] = null;
    $vars['scripts'] = null;
}

function hcpss_schoolsite_theme_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

/**
 * Removes the given class attribute from a classes array.
 *
 * @param array $array
 *   The array from which the class should be removed.
 * @param string $class
 *   The class to remove.
 *
 * @return
 *  The filtered array.
 */
function hcpss_schoolsite_theme_remove_class($array, $class) {
  $index = array_search($class,$array);
  if ($index !== FALSE) { unset($array[$index]); }
  return $array;
}

/**
 * Remove multiple classes from a classes array.
 *
 * @param array $array
 *   The array from which the classes should be removed.
 * @param array $classes
 *   An array of class names to remove.
 *
 * @return
 *  The filtered array.
 */
function hcpss_schoolsite_theme_remove_classes($array, $classes) {
  foreach ($classes as $class) {
    $array = center_remove_class($array, $class);
  }
  return $array;
}
