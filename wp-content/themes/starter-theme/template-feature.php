<?php
/*
Template Name: Features
*/
?>

<!-- Call global metaboxes -->
<?php
      global $features;
      $meta = get_post_meta(get_the_ID(), $features->get_the_id(), TRUE);
?>
      <?php get_header();?>

      <!-- Hero -->
      <div class="hero">
            <div class="container">
                  <div class="row">
                              <div class="col-md-12 page-header">
                              		<h1 itemprop="headline"><?php echo $meta['heading-title'];?></h1>
                                    <p itemprop="description"><?php echo $meta['heading-description'];?></p>
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

      <!-- Feature Set #1 -->
      <div class="feature-set set-1">
          <div class="container">
            <div class="row">
                  <h1><?php echo $meta['heading-title1']; ?></h1>
                  <h2><?php echo $meta['heading-description1']; ?></h2>
                        <div class="col-md-4 feature-list">
                              <?php echo "<img class='img-responsive' src=".$meta['feature-image1'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title1']."</h3>";
                                    echo "<p>".$meta['feature-description1']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo "<img class='img-responsive' src=".$meta['feature-image2'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title2']."</h3>";
                                    echo "<p>".$meta['feature-description2']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo "<img class='img-responsive' src=".$meta['feature-image3'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3']."</h3>";
                                    echo "<p>".$meta['feature-description3']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /features -->


      <!-- Feature Set #2 -->
      <div class="feature-set set-2">
          <div class="container">
            <div class="row">
                  <h1><?php echo $meta['heading-title2']; ?></h1>
                  <h2><?php echo $meta['heading-description2']; ?></h2>
                       <?php echo "<img class='img-responsive' src=".$meta['feature-image2-1'].">"; ?>
                        <div class="col-md-4 feature-list">
                              <?php echo "<h3>".$meta['feature-title2-1']."</h3>";
                                    echo "<p>".$meta['feature-description2-1']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo "<h3>".$meta['feature-title2-2']."</h3>";
                                    echo "<p>".$meta['feature-description2-2']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo "<h3>".$meta['feature-title2-3']."</h3>";
                                    echo "<p>".$meta['feature-description2-3']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /features -->


      <!-- Feature Set #3 -->
      <div class="feature-set set-3">
          <div class="container">
            <div class="row">
                  <h1><?php echo $meta['heading-title3']; ?></h1>
                  <h2><?php echo $meta['heading-description3']; ?></h2>
                        <div class="col-md-4 feature-list">
                              <?php echo "<img class='img-responsive' src=".$meta['feature-image3-1'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3-1']."</h3>";
                                    echo "<p>".$meta['feature-description3-1']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                               <?php echo "<img class='img-responsive' src=".$meta['feature-image3-2'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3-2']."</h3>";
                                    echo "<p>".$meta['feature-description3-2']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                               <?php echo "<img class='img-responsive' src=".$meta['feature-image3-3'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3-3']."</h3>";
                                    echo "<p>".$meta['feature-description3-3']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /features -->


      <!-- Violator -->
      <div class="violator grey">
            <div class="container">
                  <div class="col-md-8">
                        <h2 itemprop="headline"><?php echo $meta['violator-title'];?></h2>
                        <p itemprop="description"><?php echo $meta['violator-description'];?></p>
                  </div><!-- /col-md-8 -->
                  <div class="col-md-4 button">
                        <a data-toggle="modal" data-target="#webinar" class="btn btn-primary btn-lg"><?php echo $meta['violator-btn'];?></a>
                  </div><!-- /col-md-6 -->
            </div><!-- /container -->
      </div><!-- /violator -->

</div>
 <?php get_footer(); ?>