<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
 
 
<script type="text/javascript">
(function ($) {

function scroll() {
	$('#gambia_map').delay(9600).show('slow').delay(2000).hide('slow');
	$('#tunisia_map').delay(5400).show('slow').delay(2000).hide('slow');	
	$('#libya_map').delay(1200).show('slow').delay(2000).hide('slow');
    $(".africa_map").animate({"margin-top":"89px"}, 1200).delay(3000).animate({"margin-top":"150px"}, 1200).delay(3000).animate({"margin-top":"-50px"}, 1200).delay(3400);	
}

$(document).ready(function(){ 
scroll();
setInterval(scroll, 13000);	
	
});

})(jQuery);
</script> 
 
  
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  
            <div id="top_header">
                <div class="container">
	                <div class="row nomr">
		                <div class="col-md-4 col-md-offset-4 nom">
		                    <ul id="top_menu">
			                    <?php if(!$logged_in) { ?>
		                        <li><a href="#login" data-toggle="modal"><?php print t('Log In / Sign Up'); ?></a></li>
		                        <?php } else { ?>		                        
		                        <li><a href="<?php print $GLOBALS['base_url']; ?>/user"><?php print t('My Profile'); ?></a></li>			                        
		                        <li><a href="<?php print $GLOBALS['base_url']; ?>/user/logout"><?php print t('Log Out'); ?></a></li>		                        
		                        <?php } ?>           		                        
		                    </ul>
		                </div>
		                <div class="col-md-4 nom">
							<?php echo render($header) ?> 			                
		                </div>
	                </div>
                </div>
            </div>
  
  
  
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  
      <div id="top_footer">

        <div class="container" >
            <div class="row">
                <div id="footer_menu_1" class="col-sm-2 col-xs-6">
					<?php echo render($footer_menu_1) ?>
                </div>
                <div id="footer_menu_2" class="col-sm-3 col-xs-6">
					<?php echo render($footer_menu_2) ?>
                </div>
                <div id="footer_3" class="col-sm-5 col-md-offset-2">

                    <div id="newsletter">
                        <p> Sign up for our Newsletter</p>
                        <form name="newsletter" method="POST">
                            <input id="input_text" type="text" name="email" value=" example@example.com"  />
                            <input id="sign_up" type="submit" value="sign up"  />
                        </form>
                    </div>
                    <div id="social_icons">
                        <ul>
                            <li> Follow Us</li>
                            <li><a class="facebook" href="#">Facebook GPS mapping</a> </li>
                            <li><a class="twitter" href="#">Twitter GPS mapping</a> </li>
                            <li><a class="google" href="#"> Google GPS mapping </a></li>
                            <li><a class="rss" href="#">RSS GPS mapping </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="bottom_footer">
        <div class="container">
            <div class="row" >
                <div class=" col-sm-7 col-xs-12">
						<?php echo render($footer_menu_3) ?>
                </div>
                <div class="col-sm-5  col-xs-12">
                    <p>
                        <?php print t('All rights reserved © 2014. Design by <a title="Wazer IT" href="http://www.0.ly">Wazer IT</a>'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
  


  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  				<h4 class="modal-title"><?php print t('Log In'); ?></h4>
  			</div>
  			<div class="modal-body">
  				<?php echo render($login); ?>
  			</div>
  		</div>
  	</div>
  </div>
  
  
</body>
</html>
