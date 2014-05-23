</div> <!-- /container -->
	    	<footer class="footer-widgets">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-12 mailer">
	    					<p>Sign up to receive news and updates on Atmosferiq.</p>
	    					<?php echo do_shortcode('[gravityform id="5" name="Landing Page Footer" title="false" description="false" ajax="true"]');?>
	    				</div>
	    			</div>
	    		</div>

      		</footer>

		<footer class="copyright">
			<div class="social">
				<a href="https://www.facebook.com/Atmosferiq" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/atmosferiq" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="http://www.linkedin.com/company/atmosferiq" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://plus.google.com/+Atmosferiq/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
		</footer>
		
	<?php wp_footer(); ?>
	</body>
</html>