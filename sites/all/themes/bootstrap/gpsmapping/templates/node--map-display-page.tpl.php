<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
                        <div class="container">
                            <div class="row country_price">
                                    <h2 class="col-md-8 col-md-offset-1">
                                        <?php print strip_tags(render($content['field_map_name'])); ?>
                                    </h2>
                                    <div id="big_button" class="col-md-3">
	                                    <?php $nn = strip_tags(render($content['field_map_display_base']));  ?>
                                        <a href="<?php echo url('node/' . $nn); ?>">
	                                       <?php print t('Buy for $'); ?><?php $value = strip_tags(render($content['field_product_reference'])); echo $value/100; ?>
                                        </a>
                                    </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <p>
										<?php print strip_tags(render($content['field_map_description'])); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="the_map">
            <div class="container">
				<?php print render($content['field_field_country_map']); ?>
				<div class="clear"></div>
            </div>
            <div class="container">
	            <button class="citiesb btn btn-lg" data-toggle="modal" data-target="#subscriptionform"><?php print t('List of cities');?></button>
            </div>
            <div class="clear"></div>
        </div>
        <div id="map_feat">
            <div class="container">
                <div class="row">
                    <h3 class="col-md-12">
                        <?php print render($content['field_display_subtitle']); ?>
                    </h3>
                </div>
                <div class="map_feat_content">
                    <div class="row">
                        <div class="coverge_area col-md-5 col-md-offset-1">
	  					<?php if(field_get_items('node', $node, 'field_cities_list')) { ?>
						<ul>
							<?php
							$specs = field_get_items('node', $node, 'field_specification_list');
								for ($i=0; $i < count($specs); $i++) {
									$specs_list = field_view_value('node', $node, 'field_specification_list', $specs[$i]);
									print '<li>'. render($specs_list) . '</li>';
								}
							?>
						</ul>
						<?php } else { ?>
							<ul><li><?php print t('No Items') ?></li></ul>
						<?php } ?>
                        </div>
                        <div class="map_feat_text col-md-4 col-md-offset-2">
                            <p>
							   <?php print strip_tags(render($content['field_map_sub_description'])); ?>
                            </p>
                            <div class="latest_update">
                                <p><?php print t('Last Update'); ?></p><br>
                                <p class="v_date">
                            <?php print strip_tags(render($content['field_latest_update_date'])); ?> <?php print strip_tags(render($content['field_version'])); ?>
                                </p><br>
                                <p class="log" ><a href="#"><?php print t('Change Log') ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="screen_shots">
            <div class="container">
<div id="products_car" class="carousel slide" data-interval="2000" data-cycle="">
	  <ol class="carousel-indicators">
	<?php
		$slides = field_get_items('node', $node, 'field_map_areas_slideshow');
		for ($i=0; $i < count($slides); $i++) { ?>
		<li data-target="#products_car" data-slide-to="<?php echo "$i" ?>"></li><?php } ?>
  </ol>
  <div class="carousel-inner">
							<?php
								for ($i=0; $i < count($slides); $i++) {
									$slides_list = field_view_value('node', $node, 'field_map_areas_slideshow', $slides[$i]);
									if($i == 0) {
									print '<div class="active item">' . render($slides_list) . '</div>';
									} else {
									print '<div class="item">' . render($slides_list) . '</div>';
									}
								}
							?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#products_car" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#products_car" data-slide="next">&rsaquo;</a>
</div>
            </div>
        </div>
        <div id="buy_the_map">
            <div class="container">
                <div class="row">
                    <div class="buy_map_text col-md-12">
                        <h3><?php print strip_tags(render($content['field_display_subtitle'])); ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="price col-md-5">
                        <div id="the_price">
                            <p>$<?php $value = strip_tags(render($content['field_product_reference'])); echo $value/100; ?></p>
                        </div>
                        <ul>
                            <li><a href="<?php echo url('node/' . 11); ?>"><?php print t('Privacy Policy'); ?></a> </li>
                            <li><a href="<?php echo url('node/' . 12); ?>"><?php print t('Terms of Use'); ?></a> </li>
                            <li><a href="<?php echo url('node/' . 13); ?>"><?php print t('Shipping details'); ?></a> </li>
                        </ul>
                    </div>
                    <div class="buy_button col-md-5 col-md-offset-2">
                        <a href="<?php echo url('node/' . $nn); ?>"><?php print t('Buy License'); ?></a>
                        <div class="paypal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="modal fade" id="subscriptionform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form action="index.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">
        	<?php print t('close'); ?></span>
        </button>
        <h4 class="modal-title" id="myModalLabel"><?php print t('List of covered cities'); ?></h4>
      </div>
      <div class="modal-body">
	  				<div class="cities">
	  					<?php if(field_get_items('node', $node, 'field_cities_list')) { ?>
						<ol class="raw">
							<?php
							$cities = field_get_items('node', $node, 'field_cities_list');
								for ($i=0; $i < count($cities); $i++) {
									$cities_list = field_view_value('node', $node, 'field_cities_list', $cities[$i]);
									print '<li class="col-sm-4"><span>'. render($cities_list) . '</span></li>';
								}
							?>
						</ol>
						<?php } else { ?>
							<p><?php print t('No Items') ?></p>
						<?php } ?>
						<div class="clear"></div>
	  				</div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</form>
</div>
        