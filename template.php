<?php

function hcpss_schools_theme_preprocess_html(&$vars) {
  // Add the school code to the html.tpl.php template
  $vars['hcpss_school_name'] = variable_get('hcpss_school_code', 'generic');
}
