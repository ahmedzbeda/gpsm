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







