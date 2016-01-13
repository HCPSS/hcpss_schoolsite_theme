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
  $vars['facebook_url'] = variable_get('hcpss_school_facebook_url');
  $vars['hcpss_school_code'] = variable_get('hcpss_school_code', 'generic');

  // Add a fully expanded version of the main menu to the page template and call
  // it $primary_nav.
  $vars['primary_nav'] = FALSE;
  if ($vars['main_menu']) {
    $primary_nav = menu_tree(
      variable_get('menu_main_links_source', 'main-menu')
    );

    $primary_nav['#theme_wrappers'] = array('menu_tree__primary');
    $vars['primary_nav'] = $primary_nav;
  }
}

/**
 * Theme wrapper for primary menu.
 *
 * @param array $variables
 * @return string
 */
function hcpss_schoolsite_theme_menu_tree__primary($variables) {
  return vsprintf('<ul id="%s" class="%s">%s</ul>', array(
    'js-centered-navigation-menu',
    'centered-navigation-menu',
    $variables['tree'],
  ));
}

/**
 * Overrides theme_menu_link()
 *
 * @param array $variables
 * @return string
 */
function hcpss_schoolsite_theme_menu_link(array $variables) {
  $element  = $variables['element'];
  $sub_menu = '';

  // Whats level are we working with
  $depth = 1;
  if (!empty($element['#original_link']['depth'])) {
    $depth = intval($element['#original_link']['depth']);
  }

  // Take control of the classes added to the main menu
  if ($element['#original_link']['menu_name'] == 'main-menu') {
    unset($element['#attributes']['class']);

    if ($depth === 1) {
      $element['#attributes']['class'] = array('nav-link');

      if ($element['#below']) {
        $element['#attributes']['class'][] = 'more';
      }
    }
  }

  // Render the $sub_menu
  if ($element['#below']) {
    // We don't want to mess with the navbar module
    $is_mgmt_menu = $element['#original_link']['menu_name'] == 'management';
    if (($is_mgmt_menu) && (module_exists('navbar'))) {
      $sub_menu = drupal_render($element['#below']);
    } else if ($depth === 1) {
      // Add our own wrapper.
      unset($element['#below']['#theme_wrappers']);

      $sub_menu = vsprintf('<ul class="submenu">%s</ul>', array(
        drupal_render($element['#below']),
      ));
    }
  }

  $link = l(
    $element['#title'],
    $element['#href'],
    $element['#localized_options']
  );

  return vsprintf("<li%s>%s%s</li>\n", array(
    drupal_attributes($element['#attributes']),
    $link,
    $sub_menu,
  ));
}
