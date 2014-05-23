<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

  <!-- Hero -->
      <div class="hero">
            <div class="container">
                  <div class="row">
                              <div class="col-md-12 page-header">
                                    <h1><?php the_title();?></h1>
                              </div>
                  </div>
            </div>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
               echo "<?php echo $image_url; ?>";
               echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image'></div>";
             ?>
            <?php endif; ?>
      </div><!-- /hero -->
<div class="main">
    <div class="container page">
      <div class="row">
			<?php the_content(); ?>
	  </div> <!-- /row -->
	</div>
</div>
	      <div class="violator grey">
            <div class="container">
                  <div class="col-md-8">
                        <div class="row">
                              <div class="col-md-1 icon">
                                    <i class="fa fa-check-circle fa-4x"></i>
                              </div><!-- col-md-1 -->
                              <div class="col-md-11">
                                    <h2>There's a change in the weather.</h2>
                                    <p>Don't get left out in the cold.</p>
                              </div><!-- col-md-10 -->
                        </div><!-- /row -->
                  </div><!-- /col-md-6 -->
                  <div class="col-md-4">
                        <a href="#" class="btn btn-default btn-lg">Be the first to know!</a>
                  </div><!-- /col-md-6 -->
            </div><!-- /container -->
      </div><!-- /violator -->

<?php get_footer(); ?>