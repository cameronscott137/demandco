<?php
/*
Template Name: Case Study
*/
?>

<!-- Call global metaboxes -->
<?php
      global $case_study;
      $cs = get_post_meta(get_the_ID(), $case_study->get_the_id(), TRUE);
      get_header();?>
<nav id="menu" role="navigation">
      <a href="#" class="menu-button pull-right">X</a>
      <nav class="primary" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>') ); ?>
      </nav>                
</nav>
<main role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
<div class="hero case-study">
    <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="logo"><path fill="#ff3433" d="M9.55,0H0v33.034h10.802v13.699c14.012-0.626,23.64-10.568,23.64-23.405v-0.157 C34.443,10.02,24.266,0,9.55,0z"/></svg>
        </a>
        <a href="#" class="menu-button pull-right">Menu</a>
    </div>
    <img class="case-study-hero img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/case-studies/filler.jpg">
  </div><!-- /container -->
</div><!-- /hero -->




<section class="main case-study">
    <div class="container intro">    
        <div class="row">
          <div class="col-md-8">
              <h2 class="section-title" itemprop="headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
              <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie magna at suscipit auctor. Etiam hendrerit neque sed lorem aliquet, et iaculis dolor suscipit. Pellentesque vel dolor ultrices, tincidunt ante eu, mollis eros. Morbi laoreet augue sed lobortis imperdiet.</p>
              <p itemprop="description">Sed euismod, elit a malesuada faucibus, tellus magna porta mi, sed gravida libero magna nec magna. Vivamus risus turpis, ultricies et felis vel, pretium mollis dui. Nam id porta felis. Vivamus ornare nisl lectus, vel porttitor turpis volutpat at. Donec ultricies risus placerat nisi auctor, eget dictum ligula aliquet. Nullam lacus velit, sollicitudin in felis non, lobortis dictum risus. Quisque id purus eget tortor sodales aliquet sed quis eros. Mauris sagittis purus ac venenatis pretium. Nulla ultricies, justo sit amet venenatis fringilla, eros massa consequat massa, non volutpat sapien magna sed sapien. Suspendisse nec dapibus risus.</p>
          </div>
        </div>
    </div><!-- /container -->

  <section class="portfolio">
      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/case-studies/filler.jpg">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
              <p>Sed euismod, elit a malesuada faucibus, tellus magna porta mi, sed gravida libero magna nec magna. Vivamus risus turpis, ultricies et felis vel, pretium mollis dui. Nam id porta felis. Vivamus ornare nisl lectus, vel porttitor turpis volutpat at. Donec ultricies risus placerat nisi auctor, eget dictum ligula aliquet. Nullam lacus velit, sollicitudin in felis non, lobortis dictum risus.</p>
            </div>
            <div class="col-md-6">
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/case-studies/filler2.jpg">
            </div>
        </div><!-- /row -->
      </div><!-- /container -->
      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/case-studies/filler3.jpg">
      <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6">
              <p>Sed euismod, elit a malesuada faucibus, tellus magna porta mi, sed gravida libero magna nec magna. Vivamus risus turpis, ultricies et felis vel, pretium mollis dui. Nam id porta felis. Vivamus ornare nisl lectus, vel porttitor turpis volutpat at. Donec ultricies risus placerat nisi auctor, eget dictum ligula aliquet. Nullam lacus velit, sollicitudin in felis non, lobortis dictum risus.</p>
            </div>
            <div class="col-md-6 col-md-pull-6">
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/case-studies/filler4.jpg">
            </div>
        </div><!-- /row -->
      </div><!-- /container -->
      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/case-studies/filler5.jpg">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 testimonial">
                      <p>Sed euismod, elit a malesuada faucibus, tellus magna porta mi, sed gravida libero magna nec magna. Vivamus risus turpis, ultricies et felis vel, pretium mollis dui. Nam id porta felis. Vivamus ornare nisl lectus, vel porttitor turpis volutpat at. Donec ultricies risus placerat nisi auctor, eget dictum ligula aliquet. Nullam lacus velit, sollicitudin in felis non, lobortis dictum risus.</p>
                    </div>
                </div><!-- /row -->
      </div><!-- /container -->
  </section>


  <div class="violator">
        <div class="container">
              <div class="col-md-6">
                    <h2 itemprop="headline"><?php echo $cs['violator3-title'];?></h2>
                    <p itemprop="description"><?php echo $cs['violator3-description'];?></p>
              </div><!-- /col-md-8 -->
              <div class="col-md-6 form">
                  <?php echo do_shortcode('[gravityform id="6" name="Webinar" title="false" description="false" ajax="true"]');?>
                          <script type="text/javascript">
                      var __ss_noform = __ss_noform || [];
                      __ss_noform.push(['baseURI', 'https://app-NTJGC2.sharpspring.com/webforms/receivePostback/MzQ0MwYA/']);
                      __ss_noform.push(['endpoint', 'eb10c4bd-0695-4228-9961-26b942e68d52']);
                  </script>
                  <script type="text/javascript" src="https://koi-NTJGC2.sharpspring.com/client/noform.js?ver=1.0" ></script>
              </div><!-- /col-md-6 -->
        </div><!-- /container -->
  </div><!-- /violator -->

</main><!-- /main --><div style="clear: both;"></div>
 <?php get_footer(); ?>