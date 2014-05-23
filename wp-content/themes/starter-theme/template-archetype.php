<?php
/*
Template Name: Archetype
*/
?>

<!-- Call global metaboxes -->
<?php
      global $archetypes;
      $meta = get_post_meta(get_the_ID(), $archetypes->get_the_id(), TRUE);
      get_header();?>

      <!-- Hero -->
      <div class="hero">
               <div class="container">
                     <div class="row">
                                 <div class="col-md-6 cta">
                                    <h1 itemprop="headline"><?php echo $meta['cta-title']; ?></h1>
                                    <p itemprop="description"><?php echo $meta['cta-description']; ?></p>
                                    <a class="btn btn-primary btn-lg" href="http://app.atmosferiq.com/sign_up" target="_blank"><?php echo $meta['cta-button']; ?></a>
                                 </div>
                                 <div class="col-md-6 product-image">
                                    <?php echo "<img class='img-responsive' src=".$meta['cta-image'].">"; ?>
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

<main class="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

      <!-- Story -->
      <div class="container archetype story">
            <div class="row">
                  <div class="col-md-12">
                        <div class="lede">
                              <p><?php echo $meta['story1']; ?></p>
                        </div>
                        <div class="content">
                              <p><?php echo $meta['story2']; ?></p>
                        </div>
                  </div><!-- /col-md-12 -->
            </div><!-- /row -->
      </div><!-- /story -->

      <!-- Features -->
      <div class="archetype features">
          <div class="container">
            <div class="row">
                  <h1>Use Atmosferiq for Your Business</h1>
                        <div class="col-md-4 feature-list">
                              <?php echo $meta['feature-icon1']; ?>
                              <?php echo "<h3>".$meta['feature-title1']."</h3>";
                                    echo "<p>".$meta['feature-description1']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo $meta['feature-icon2']; ?>
                              <?php echo "<h3>".$meta['feature-title2']."</h3>";
                                    echo "<p>".$meta['feature-description2']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo $meta['feature-icon3']; ?>
                              <?php echo "<h3>".$meta['feature-title3']."</h3>";
                                    echo "<p>".$meta['feature-description3']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /features -->

      <!-- Features -->
       <div class="container archetype testimonial">
         <div class="row">
                  <div class="col-md-12">
                        <h1><?php echo $meta['testimonial-title']; ?></h1>
                        <div class="testimonial-sidebar">
                              <p>“<?php echo $meta['testimonial']; ?>”</br>
                              <cite><?php echo $meta['testimonial-cite']; ?></cite></p>
                        </div>
                        <?php echo "<img class='img-responsive' src=".$meta['testimonial-image'].">"; ?>
                  </div><!-- /col-md-12 -->
         </div><!-- /row -->
      </div><!-- /testimonial-->


      <!-- Violator -->
<div class="violator grey">
        <div class="container">
              <div class="col-md-8">
                    <h2 itemprop="headline"><?php echo $meta['violator-title'];?></h2>
                    <p itemprop="description"><?php echo $meta['violator-description'];?></p>
              </div><!-- /col-md-8 -->
              <div class="col-md-4 button">
                    <a class="btn btn-primary btn-lg" href="http://app.atmosferiq.com/sign_up" target="_blank"><?php echo $meta['violator-btn'];?></a>
              </div><!-- /col-md-6 -->
        </div><!-- /container -->
  </div><!-- /violator -->

</main>
 <?php get_footer(); ?>