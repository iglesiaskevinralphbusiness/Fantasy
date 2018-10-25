<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fantasy
 */

?>

	</div><!-- #content -->

	<!-- footer -->
		<div class="w3l_footer">
			<div class="container">
				<div class="w3ls_footer_grids">
					<div class="w3ls_footer_grid">
						<?php if ( is_active_sidebar( 'widget-areas-95' ) ) : ?>
	<div id="widget-areas-95" class="widget-areas ">
	<?php dynamic_sidebar( 'widget-areas-95' ); ?>
	</div>
<?php endif; ?>
						<div class="col-md-4 w3ls_footer_grid_left">
							<div class="w3ls_footer_grid_leftl">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3ls_footer_grid_leftr">
								<h4>Location</h4>
								<p>3030 New York, NY, USA</p>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="col-md-4 w3ls_footer_grid_left">
							<div class="w3ls_footer_grid_leftl">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3ls_footer_grid_leftr">
								<h4>Email</h4>
								<a href="mailto:info@example.com">info@example.com</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 w3ls_footer_grid_left">
							<div class="w3ls_footer_grid_leftl">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3ls_footer_grid_leftr">
								<h4>Call Us</h4>
								<p>(+000) 003 003 0052</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="w3l_footer_pos">
				<p>© 2017 Fantasy World. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	<!-- //footer -->
	<?php wp_footer(); ?>
	</body>
	</html>
