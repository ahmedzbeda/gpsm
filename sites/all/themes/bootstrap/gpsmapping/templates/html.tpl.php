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
 
  
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  
              <div id="top_header" class="">
                <div class="container">
                    <ul>
                        <li> <a href="#">Data submission</a></li>
                        <li> <a href="#">Contacts</a></li>
                        <li> <a href="#" class="login">Login</a></li>
                    </ul>
                </div>
            </div>

  
  
  
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  
      <div id="top_footer">

        <div class="container" >
            <div class="row">
                <div id="footer_menu_1" class="col-sm-2 col-xs-6">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">What's GPS</a></li>
                    </ul>

                </div>
                <div id="footer_menu_2" class="col-sm-2 col-xs-6">
                    <ul>
                        <li><a href="#">Downloadable Maps</a></li>
                        <li><a href="#">Printed Maps</a></li>
                        <li><a href="#">GPS Devices</a></li>
                        <li><a href="#">Accesories</a></li>
                        <li><a href="#">Date Submission</a></li>
                    </ul>

                </div>
                <div id="footer_3" class="col-sm-5 col-md-offset-3">

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
                            <li><a class="facebook" href="#">facebook GPS mapping</a> </li>
                            <li><a class="twitter" href="#">twitter GPS mapping</a> </li>
                            <li><a class="google" href="#"> google GPS mapping </a></li>
                            <li><a class="rss" href="#">rss GPS mapping </a></li>
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
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Terms & Serves</a></li>
                        <li><a href="#">Policy & Privacy</a></li>
                        <li><a href="#">Shipping details</a></li>
                    </ul>
                </div>
                <div class="col-sm-5  col-xs-12">
                    <p>
                        All rights reserved © 2014. Designed by Wazer, LLC
                    </p>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>
