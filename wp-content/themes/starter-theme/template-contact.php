<?php
/**
 * 
 * Template Name: Contact
 * 
 */
?>
<?php get_header(); ?>

  <!-- Hero -->
      <div class="hero">
            <div class="container">
                  <div class="row">
                  </div>
            </div>
               <div id="map-canvas">
               </div>
      </div><!-- /hero -->
<div class="main">
    <div class="container page">
      <div class="row">
        <div class="col-md-12 contact-header">
                    <h1><?php the_title();?></h1>
                    <p><?php the_content();?></p>
        </div>
      </div>
      <div class="row">
         <div class="col-md-6 contact-form">
            <?php echo do_shortcode('[gravityform id="1" name="Contact" title="false" description="false" ajax="true"]');?>
        </div><!-- /col-md-6 -->
         <div class="col-md-6 address">
            <h3><strong>Atmosferiq, Inc.</strong></br>
              111 N. Whitfield St.</br>
              Third Floor</br>
              Pittsburgh, PA, 15206</br>
              <a href="mailto:contact@atmosferiq.com">contact@atmosferiq.com</a></h3>
        </div><!-- /col-md-6 -->
     </div> <!-- /row -->
   </div>
</div>


<?php get_footer(); ?>