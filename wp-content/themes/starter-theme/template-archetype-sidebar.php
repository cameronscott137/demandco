<?php
/*
Template Name: Archetype w/ sidebar
*/
?>

<!-- Call global metaboxes -->
<?php
      global $archetypes;
      $meta = get_post_meta(get_the_ID(), $archetypes->get_the_id(), TRUE);
?>

<?php get_header();?>
      <div class="hero">
                    <h1>Know the Whether</h1>
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
                     echo "<?php echo $image_url; ?>";
                     echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image'></div>";
                   ?>
                  <?php endif; ?>
      </div>

<div class="main">

          <div class="container archetype">
            <div class="row">
                  <div class="col-md-12">
                        <h1><?php the_title();?></h1>
                        <div class="lede">
                              <?php the_excerpt();?>
                        </div>
                  </div><!-- /col-md-12 -->
            </div><!-- /row -->

            <div class="row">
                  <div class="col-md-8 archetype-content">
                        <?php the_content(); ?> 
                  <div class="row feature-list">
                        <div class="col-sm-1 icon">
                              <?php echo $meta['feature-icon1']; ?>
                        </div><!-- col-md-1 -->
                        <div class="col-sm-11">
                              <?php echo "<h3>".$meta['feature-title1']."</h3>";
                                    echo "<p>".$meta['feature-description1']."</p>";
                              ?>
                        </div><!-- col-md-10 -->
                  </div><!-- /row -->
                  <div class="row feature-list">
                        <div class="col-sm-1 icon">
                              <?php echo $meta['feature-icon2']; ?>
                        </div><!-- col-md-1 -->
                        <div class="col-sm-11">
                              <?php echo "<h3>".$meta['feature-title2']."</h3>";
                                    echo "<p>".$meta['feature-description2']."</p>";
                              ?>
                        </div><!-- col-md-10 -->
                  </div><!-- /row -->
                  <div class="row feature-list">
                        <div class="col-sm-1 icon">
                              <?php echo $meta['feature-icon3']; ?>
                        </div><!-- col-md-1 -->
                        <div class="col-sm-11">
                              <?php echo "<h3>".$meta['feature-title3']."</h3>";
                                    echo "<p>".$meta['feature-description3']."</p>";
                              ?>
                        </div><!-- col-md-10 -->
                  </div><!-- /row -->
                   <div class="row feature-list">
                        <div class="col-sm-1 icon">
                              <?php echo $meta['feature-icon4']; ?>
                        </div><!-- col-md-1 -->
                        <div class="col-sm-11">
                              <?php echo "<h3>".$meta['feature-title4']."</h3>";
                                    echo "<p>".$meta['feature-description4']."</p>";
                              ?>
                        </div><!-- col-md-10 -->
                  </div><!-- /row -->
                  </div><!-- /col-md-8-->
                  <div class="col-md-4 testimonial-sidebar">
                        <p>“Marketing spend should yield results that can be measured and improved upon to increase efficiency and effectiveness.”</br>

                        <cite><strong>John Henne,</strong> Henne Jewelers</cite></p>
                  </div><!-- /col-md-4-->
            </div><!-- /row -->
          </div><!-- /container -->

            <div class="violator">
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
                              <a href="#" class="btn btn-primary btn-lg">Be the first to know!</a>
                        </div><!-- /col-md-6 -->
                  </div><!-- /container -->
            </div><!-- /violator -->
</div><!-- /main -->

 <?php get_footer(); ?>