<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/*
	Required external files
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );
	//require_once( 'custom-post-type.php' );



	/*
	Theme specific settings
	======================================================================================================================== */

	/* Images */
	add_theme_support('post-thumbnails');
	add_image_size( 'atmosferiq', 300, 300, true ); //(cropped)
	

	/* Menus */
	register_nav_menus(array('primary' => 'Primary Navigation'));
	register_nav_menus(array('footer' => 'Footer Navigation'));
	register_nav_menus(array('archetype' => 'Archetype'));

		function atm_widgets_init() {
		    register_sidebar( array(
		        'name' => __( 'Business Owner Testimonial', 'atm' ),
		        'id' => 'business-owner',
				'description' => __( 'Business owner testimonial', 'atm' ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'Marketing Manager Testimonial', 'atm' ),
		        'id' => 'marketing-manager',
				'description' => __( 'Marketing manager testimonial', 'atm' ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'Media Planner Testimonial', 'atm' ),
		        'id' => 'media-planner',
				'description' => __( 'Media planner testimonial', 'atm' ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'About Demand', 'atm' ),
		        'id' => 'footer-1',
				'description' => __( 'About Demand', 'atm' ),
				'before_widget' => '<aside class="col-xs-12 center-block widget %2$s">',
				'after_widget' => "</aside>"
		    ) );
		}

		add_action( 'widgets_init', 'atm_widgets_init' );

	/* Blog Post Excerpts */
		function atm_new_excerpt_more($more) {
		       global $post;
					return '... <a class="read-more" href="'. get_permalink($post->ID) . '">Read More »</a>';
		}
		add_filter('excerpt_more', 'atm_new_excerpt_more');

		function atm_custom_excerpt_length( $length ) {
			if ( is_page_template('template-home.php') )
				return 20;
			else
				return 40;
		}
		add_filter( 'excerpt_length', 'atm_custom_excerpt_length', 999 );


	/* Enable page excerpts */
		add_action('init', 'atm_page_excerpt');
		function atm_page_excerpt() {
			add_post_type_support( 'page', 'excerpt' );
		}


	/* Metaboxes */
		include_once 'metaboxes/setup.php';
		include_once 'metaboxes/simple-spec.php';
		//include_once 'metaboxes/full-spec.php';
		//include_once 'metaboxes/checkbox-spec.php';
		//include_once 'metaboxes/radio-spec.php';
		//include_once 'metaboxes/select-spec.php';

	/*
	Custom Login and Admin
	======================================================================================================================== */
	
	/* Hide Content Editor for pages with certain templates. */
	function ttv_hide_editor() {
		// Get the Post ID.
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		if( !isset( $post_id ) ) return;

		// Hide the editor on a page with a specific page template
		// Get the name of the Page Template file.
		$template_file = get_post_meta($post_id, '_wp_page_template', true);

		/* Add the names of the template files here */
		if($template_file == 'template-home.php' || $template_file == 'template-archetype.php' || $template_file == 'template-feature.php' || $template_file == 'template-landing.php' || $template_file == 'template-pricing.php') { // the filename of the page template
		remove_post_type_support('page', 'editor');
		}
	}
	add_action( 'admin_init', 'ttv_hide_editor' );


	/* Load Bootstrap into Admin */
	function ttv_load_custom_admin() {
	        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin/admin-style.css', false, '1.0.0' );
	        wp_enqueue_style( 'custom_wp_admin_css' );

			wp_register_script( 'custom_wp_admin_script', get_template_directory_uri().'/admin/bootstrap.min.js', array( 'jquery' ), false, true );
			wp_enqueue_script( 'custom_wp_admin_script' );

	}
	add_action( 'admin_enqueue_scripts', 'ttv_load_custom_admin' );


	function atm_login_logo() { ?>
	    <style type="text/css">
	        body.login div#login{
	        	padding: 40px 0 0;
	        }
	        body.login div#login h1 a {
	            background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/login_logo.png);
				background-size: 300px 85px;
				padding-bottom: 10px;
				width: auto;
	        }
	    </style>
	<?php }

	add_action( 'login_enqueue_scripts', 'atm_login_logo' );

	function atm_login_logo_url() {
		    return get_bloginfo( 'url' );
		}
	add_filter( 'login_headerurl', 'atm_login_logo_url' );

	/*
	Actions and Filters
	======================================================================================================================== */


	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );



	/*
	Scripts
	======================================================================================================================== */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/site.min.js', array( 'jquery' ),'',true );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.min.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

		/*wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'bootstrap-js' );

		wp_register_script( 'scroll-to', get_template_directory_uri().'/js/jquery.scrollTo-1.4.3.1-min.js', array( 'jquery' ) );
		wp_enqueue_script( 'scroll-to' );

		wp_register_script( 'local-scroll', get_template_directory_uri().'/js/jquery.localscroll-1.2.7-min.js', array( 'jquery' ) );
		wp_enqueue_script( 'local-scroll' );

		wp_register_script( 'respond', get_template_directory_uri().'/js/respond.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'respond' );

		/*wp_register_style( 'boostrap-3', get_stylesheet_directory_uri().'/css/bootstrap.css', '', '', 'screen' );
        wp_enqueue_style( 'boostrap-3' );*/

       /* wp_register_style( 'bootstrap-responsive', get_stylesheet_directory_uri().'/css/bootstrap-responsive.css', '', '', 'screen' );
        wp_enqueue_style( 'bootstrap-responsive' ); */
	}

	/* Google Fonts */
	function google_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
            wp_enqueue_style( 'googleFonts');
        }
    add_action('wp_print_styles', 'google_fonts');
	
	/* Google Fonts */
    function fontAwesome() {
            wp_register_style('fontAwesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
            wp_enqueue_style( 'fontAwesome');
        }
    add_action('wp_print_styles', 'fontAwesome');



	/*
	Comments
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}


/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);

function my_standard_settings($position, $form_id){

// Create settings on position 25 (right after Field Label)

	if($position == 25){
?>
		
<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text

<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
			
</label>
		
<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
		
</li>
<?php
}
}

/* Now we execute some javascript technicalitites for the field to load correctly */

		add_action("gform_editor_js", "my_gform_editor_js");
		function my_gform_editor_js(){
		?>
			<script>
				//binding to the load field settings event to initialize the checkbox
				jQuery(document).bind("gform_load_field_settings", function(event, field, form){
				jQuery("#field_placeholder").val(field["placeholder"]);
				});
			</script>
		<?php
		}

/* We use jQuery to read the placeholder value and inject it to its field */

		add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);

			function my_gform_enqueue_scripts($form, $is_ajax=false){
			?>
			<script>

		jQuery(function(){
		<?php

			/* Go through each one of the form fields */
			foreach($form['fields'] as $i=>$field){

			/* Check if the field has an assigned placeholder */
						
			if(isset($field['placeholder']) && !empty($field['placeholder'])){
							
			/* If a placeholder text exists, inject it as a new property to the field using jQuery */
							
			?>
				
			jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
				
			<?php
			}
			}
			?>
		});
		</script>
		<?php
		}

	/* 
	Keep Users Logged In For One Year
	======================================================================================================================== */
	add_filter( 'auth_cookie_expiration', 'keep_me_logged_in_for_1_year' );
		function keep_me_logged_in_for_1_year( $expirein ) {
	    return 31556926; // 1 year in seconds
	}

	/* Pagination Test
	======================================================================================================================== */

	function if_pagination() {
		global $wp_query;
		return ( $wp_query->max_num_pages > 1 );
	}