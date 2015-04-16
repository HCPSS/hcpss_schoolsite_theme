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
