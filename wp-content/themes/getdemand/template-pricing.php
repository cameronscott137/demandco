<?php
/*
Template Name: Pricing
*/
?>

<!-- Call global metaboxes -->
<?php
      global $pricing;
      $pricing = get_post_meta(get_the_ID(), $pricing->get_the_id(), TRUE);
?>

      <?php get_header();?>

      <!-- Hero -->
      <div class="hero">
            <div class="container">
                  <div class="row">
                              <div class="col-md-12 page-header">
                                    <h1 itemprop="headline"><?php echo $pricing['heading-title'];?></h1>
                                    <p itemprop="description"><?php echo $pricing['heading-description'];?></p>
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
      <div class="pricing-grid">
          <div class="container">
            <div class="row">
                        <div class="col-md-4 pricing-column">
                           <header class="pricing-header">
                              <h1>Basic</h1>
                           </header>
                           <div class="pricing-body">
                              <h3 class="price"><?php echo $pricing['price'];?></h3>
                              <p class="pricing-desc"><?php echo $pricing['price-desc'];?></p>
                              <a href="http://app.atmosferiq.com/sign_up" class="btn btn-primary btn-lg" target="_blank"><?php echo $pricing['price-btn'];?></a>
                           </div>
                           <div class="pricing-footer">
                              <ul class="pricing-features">
                                    <?php 
                                      $var= $pricing['basic-features'];
                                      if($var != null){
                                        foreach( $var as $v=>$x_val) {
                                          echo "<li>".$x_val['pricing-feature']."</li>";
                                        }
                                      }
                                    ?>  
                              </ul>
                           </div>
                        </div><!-- col-md-4 -->
                          <div class="col-md-4 pricing-column coming-soon">
                           <header class="pricing-header">
                              <h1>Plus</h1>
                           </header>
                           <div class="pricing-body">
                              <h3 class="price"><?php echo $pricing['price-plus'];?></h3>
                              <p class="pricing-desc"><?php echo $pricing['price-desc-plus'];?></p>
                              <a data-toggle="modal" data-target="#preorder" class="btn btn-primary btn-lg"><?php echo $pricing['price-btn-plus'];?></a>
                           </div>
                           <div class="pricing-footer">
                              <ul class="pricing-features">
                                    <?php 
                                      $var= $pricing['plus-features'];
                                      if($var != null){
                                        foreach( $var as $v=>$x_val) {
                                          echo "<li>".$x_val['pricing-feature-plus']."</li>";
                                        }
                                      }
                                    ?>  
                              </ul>
                           </div>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 pricing-column coming-soon">
                           <header class="pricing-header">
                              <h1>Premium</h1>
                           </header>
                           <div class="pricing-body">
                              <h3 class="price"><?php echo $pricing['price-prem'];?></h3>
                              <p class="pricing-desc"><?php echo $pricing['price-desc-prem'];?></p>
                              <a data-toggle="modal" data-target="#preorder" class="btn btn-primary btn-lg"><?php echo $pricing['price-btn-prem'];?></a>
                           </div>
                           <div class="pricing-footer">
                              <ul class="pricing-features">
                                    <?php 
                                      $var= $pricing['premium-features'];
                                      if($var != null){
                                        foreach( $var as $v=>$x_val) {
                                          echo "<li>".$x_val['pricing-feature-prem']."</li>";
                                        }
                                      }
                                    ?>  
                              </ul>
                           </div>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /pricing grid -->
</div><!-- /main -->
 <?php get_footer(); ?>