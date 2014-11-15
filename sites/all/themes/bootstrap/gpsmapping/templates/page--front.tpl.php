<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

            <div id="banner_wrap">
                <div id="banner">
                    <div class="shade_layer">
                        <div class="container" >
                            <div class="h_menu" >
                                <h1 id="logo">
                                    <a href="<?php print $front_page; ?>"><?php print $title; ?></a>
                                </h1>
								<?php print render($page['main_menu']); ?>	
                            </div>
							<?php if($is_front) { ?>
							<div class="africa_map" >
                            	<a id='libya_map' href="<?php print url('node/5'); ?>">Libya map</a>
								<a id='tunisia_map' href="<?php print url('node/19'); ?>">Tunisia map</a> 
								<a id='gambia_map' href="<?php print url('node/22'); ?>">Gambia map</a> 								                           
							</div>                            
							<?php ;} ?>
                        </div>
                    </div>
                </div>
            </div>                                    

        <div id="bottom_header_wrap">
            <div id="bottom_header">
                <div class="container">
					<?php print render($page['bottom_header']); ?>	
                </div>
            </div>
        </div>
        <div id="services_wrap">
            <div class="container">
                <div class="row">
                    <div id="download_serv" class="col-sm-4">
                        <a href="<?php print url('gps-maps'); ?>" title="GPS mapping Maps">
	                        <img src="<?php print $GLOBALS['base_url']; ?>/<?php print $directory; ?>/img/home_services_map_icon.jpg" alt="GPS mapping Maps"/>
	                    </a>
                        <h3><a href="<?php print url('gps-maps'); ?>"><?php echo 'Download Maps'; ?></a></h3>
                        <p><?php print strip_tags(render($page['Download_gps_maps'])) ;?></p>
                    </div>
                    <div id="device_serv" class="col-sm-4">
                        <a href="<?php print url('devices-accessories'); ?>" title="GPS mapping Devices">
	                        <img src="<?php print $GLOBALS['base_url']; ?>/<?php print $directory; ?>/img/home_services_device_icon.jpg" alt="GPS mapping Devices"/></a>
                        <h3><a href="<?php print url('devices-accessories'); ?>"><?php print t('Buy a Device'); ?></a></h3>
                         <p><?php print strip_tags(render($page['buy_a_device'])) ;?></p>
                    </div>
                    <div id="latest_update" class="col-sm-4">
                        <h3><?php print t('Latest Updates'); ?></h3>
						<?php print render($page['home_latest_maps_updates']) ;?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="testimonial_wrp">
            <div class="container">
                <div class="row col-md-12">
                    <h3><?php print t('Testimonials'); ?></h3>
                    
                    <div class="testimonial_content">
                        <div class="testimonial_content_img" style=" background: url(<?php print $GLOBALS['base_url']; ?>/<?php print $directory; ?>/img/me.jpg);" >
                        </div>
                        <div class="testimonial_content_text">
                            <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  ”</p>
                            <p class="testimonial_name">- Mohammad AboGhrara</p>
                        </div>
                    </div>
                    
                    <div class="testimonial_track hidden-sm hidden-xs">
	                    
	                    
	                    
                        <div class="dot">
                            <div id="dot_1">
                                <a class="active_dot" href="#"></a>
                            <div class="testimonial_polygon_1 testimonial_polygon_style">
                                <p> He used the map in Libya</p>
                                <div class="polygon_triangle">
                                </div>
                            </div>                                                                
                            </div>
                            
                            
                            <div id="dot_2">
                                <a class="active_dot" href="#"></a> 
                            <div class="testimonial_polygon_2 testimonial_polygon_style">
                                <p> He used the map in Libya</p>
                                <div class="polygon_triangle">
                                </div>
                            </div>                                                              
                            </div>
                            
                            
                            <div id="dot_3">
                                <a class="active_dot" href="#"></a>
                            <div class="testimonial_polygon_3 testimonial_polygon_style">
                                <p> He used the map in Libya</p>
                                <div class="polygon_triangle">
                                </div>
                            </div>                                
                            </div>
                            
                            
                            <div id="dot_4">
                                <a class="active_dot" href="#"></a>                                
                            <div class="testimonial_polygon_4 testimonial_polygon_style">
                                <p> He used the map in Libya</p>
                                <div class="polygon_triangle">
                                </div>
                            </div>
                            </div>                          
                            
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div id="partners_wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">  
                    <img src="<?php print $GLOBALS['base_url']; ?>/<?php print $directory; ?>/img/home_partners.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

