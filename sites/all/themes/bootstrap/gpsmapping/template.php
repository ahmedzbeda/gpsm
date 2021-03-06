<?php
/**
 * @file
 * template.php
 */


 
function gpsmapping_preprocess_page(&$variables, $hook) {

   if (isset($variables['node'])) {
		$variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
		$variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
   }
   if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '__' . $path_part;
        $variables['theme_hook_suggestions'][] = $template_filename;
      }
    }
   }
  function gpsmapping_js_alter(&$javascript) {
  $jquery_path = drupal_get_path('theme','gpsmapping') . '/js/jquery-1.11.1.min.js';
  $javascript[$jquery_path] = $javascript['misc/jquery.js'];
  //..and we update the information that we care about
  $javascript[$jquery_path]['version'] = '1.11.1';
  $javascript[$jquery_path]['data'] = $jquery_path;
  //Then we remove the Drupal core version
  unset($javascript['misc/jquery.js']);
  }
  $options = array(
    'group' => JS_THEME,
  );
  drupal_add_js(drupal_get_path('theme', 'gpsmapping'). '/js/bootstrap.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'gpsmapping'). '/fancy/jquery.fancybox.js', $options);
  drupal_add_js(drupal_get_path('theme', 'gpsmapping'). '/fancy/helpers/jquery.fancybox-media.js', $options);    
  
  
}
function gpsmapping_menu_tree__main_menu($variables) {
  return '<ul id="header_menu">' . $variables['tree'] . '</ul>';
}
function hook_preprocess_page(&$variables) {
        if (arg(0) == 'node') {
                $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][arg(1)];
        }
}
function gpsmapping_preprocess_node(&$vars) {
     if ($blocks = block_get_blocks_by_region('map_product_privacy')) {
      $vars['map_product_privacy'] = $blocks;
  }
     if ($blocks = block_get_blocks_by_region('map_product_log')) {
      $vars['map_product_log'] = $blocks;
  }
}
function gpsmapping_preprocess_html(&$variables) {
	    $variables['footer_menu_1'] = block_get_blocks_by_region('footer_menu_1');
	    $variables['footer_menu_2'] = block_get_blocks_by_region('footer_menu_2');
	    $variables['footer_menu_3'] = block_get_blocks_by_region('footer_menu_3');
	    $variables['social_icons'] = block_get_blocks_by_region('social_icons');	    
	    $variables['header'] = block_get_blocks_by_region('header');
	    $variables['login'] = block_get_blocks_by_region('login');

}


function gpsmapping_menu_tree(&$variables) {
  return '<ul class="menu">' . $variables['tree'] . '</ul>';
}


function gpsmapping_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'gpsmapping') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'gpsmapping_preprocess_user_login'
  ),
 );
return $items;
}









