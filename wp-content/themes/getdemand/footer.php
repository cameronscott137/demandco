</div> <!-- /container -->
	    	<footer class="footer-widgets">
	    		<div class="container">
		      		<section class="row">
		      			    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-1") ) : ?>
		       				<?php endif; ?>

		      			    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-2") ) : ?>
		       				<?php endif; ?>
		      			<div class="col-sm-4 footer-nav">
		      				<h2 class="widget-title">Browse the Site</h3>
		                    <nav class="footer">
		                        <?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
		                    </nav>
		      			</div>
		      		</section><!-- /row -->
		      	</div>
      		</footer>

		<footer class="copyright">
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
		</footer>
		<?php include('modal.php'); ?>
		<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/html5shiv.js" type="text/javascript"></script>
    <script src="http://atmosferiq.com/wp-content/themes/starter-theme/bootstrap/js/respond.min.js" type="text/javascript"></script>
<![endif]-->

	<?php wp_footer(); ?>
	</body>
</html>