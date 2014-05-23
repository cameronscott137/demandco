</div> <!-- /container -->
	    	<footer class="footer-widgets">
	    		<div class="container">
		      		<section class="row">
		      				<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri();?>/images/footer_logo.svg">
		      			    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-1") ) : ?>
		       				<?php endif; ?>
		      		</section><!-- /row -->
		      	</div>
      		</footer>

		<footer class="copyright">
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. Proudly Made in Pittsburgh, PA
		</footer>
		<?php include('modal.php'); ?>
		<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/html5shiv.js" type="text/javascript"></script>
    <script src="http://atmosferiq.com/wp-content/themes/starter-theme/bootstrap/js/respond.min.js" type="text/javascript"></script>
<![endif]-->

	<?php wp_footer(); ?>
	</body>
</html>