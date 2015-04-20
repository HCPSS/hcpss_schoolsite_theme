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
