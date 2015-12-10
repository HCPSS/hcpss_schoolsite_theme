<?php

/**
 * Implementation of hook_preprocess_HOOK
 * 
 * @param array $vars
 */
function hcpss_schoolsite_theme_preprocess_html(&$vars) {
  // Add the school code to the html.tpl.php template
    
  // @TODO: hcpss_school_name vs hcpss_school_code? Why the subtle name change?
  $vars['hcpss_school_name'] = variable_get('hcpss_school_code', 'generic');
}

/**
 * Implementation of hook_preprocess_HOOK
 * 
 * @param array $vars
 */
function hcpss_schoolsite_theme_preprocess_page(&$vars) {
  $vars['facebook_url'] = variable_get('hcpss_facebook_url');
  $vars['hcpss_school_code'] = variable_get('hcpss_school_code', 'generic');
}
