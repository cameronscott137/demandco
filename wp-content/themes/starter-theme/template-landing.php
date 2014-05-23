<?php
/*
Template Name: Landing Page
*/
?>

<!-- Call global lpboxes -->
<?php
      global $landing;
      $lp = get_post_meta(get_the_ID(), $landing->get_the_id(), TRUE);
?>

<?php get_header();?>

<!-- Hero -->
<div class="hero landing">
      <div class="container">
            <div class="row">
                        <div class="col-md-6 cta">
                           <h1 itemprop="headline"><?php echo $lp['landing-title']; ?></h1>
                           <p itemprop="description"><?php echo $lp['landing-description']; ?></p>
                        </div>
                        <div class="col-md-6 product-image">
                           <?php echo "<img class='img-responsive' src=".$lp['landing-image'].">"; ?>
                        </div>
            </div>
      </div>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
         echo "<?php echo $image_url; ?>";
         echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image' alt='landing page image'></div>";
       ?>
      <?php endif; ?>
</div><!-- /hero -->

<main class="main landing" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="container">
        <div class="row">
          <div class="col-sm-6">
              <p>
                <?php echo $lp['landing-copy-desc']; ?>
              </p>
                      <div class="row landing-bullet">
                          <div class="col-sm-2">
                            <i class="fa fa-check-square-o fa-lg"></i>
                          </div>
                          <div class="col-sm-10">
                                <?php echo "<h2 class='bullet-title'>".$lp['landing-bullet-header1']."</h2>";
                                      echo "<p class='bullet-desc'>".$lp['landing-bullet-desc1']."</p>";
                                ?>
                          </div><!-- col-md-4 -->
                      </div><!--/row-->
                      <div class="row landing-bullet">
                          <div class="col-sm-2">
                            <i class="fa fa-check-square-o fa-lg"></i>
                          </div>
                          <div class="col-sm-10">
                                <?php echo "<h2 class='bullet-title'>".$lp['landing-bullet-header2']."</h2>";
                                      echo "<p class='bullet-desc'>".$lp['landing-bullet-desc2']."</p>";
                                ?>
                          </div><!-- col-md-4 -->
                      </div><!--/row-->
                      <div class="row landing-bullet">
                          <div class="col-sm-2">
                            <i class="fa fa-check-square-o fa-lg"></i>
                          </div>
                          <div class="col-sm-10">
                                <?php echo "<h2 class='bullet-title'>".$lp['landing-bullet-header3']."</h2>";
                                      echo "<p class='bullet-desc'>".$lp['landing-bullet-desc3']."</p>";
                                ?>
                        </div><!-- col-md-4 -->
                    </div><!--/row-->
          </div><!-- /col-md-6 -->
          <div class="landing-form col-sm-6">
                    <?php echo "<h2 class='form-header'>".$lp['landing-form-header']."</h2>";
                          echo "<div class='form-body'>". do_shortcode($lp["landing-form-shortcode"]);
//                          echo "<p><a class='btn btn-primary'>".$lp['landing-form-button']."</a></p></div>";
                    ?>
          </div>
        </div><!-- /row -->
    </div><!-- /container -->
  </div>

<div class="secondary-landing gray">
  <div class="container">
    <div class="row">
      <h2 class="section-title">See Atmosferiq in Action</h2>
          <div class="col-sm-6 webinar">
            <h2><i class="fa fa-calendar"></i>Attend a Webinar</h2>
            <p>Get a guided tour of our solution from one of our knowledgeable sales people.</p>
            <a href="#">Pick a Date &raquo;</a>
          </div>
          <div class="col-sm-6 demo">
            <h2><i class="fa fa-laptop"></i>Request a Demo</h2>
            <p>Get a guided tour of our solution from one of our knowledgeable sales people.</p>
            <a href="#">Start Now &raquo;</a>
          </div>
    </div>
  </div>
</div>
</main>


 <?php get_footer('landing'); ?>