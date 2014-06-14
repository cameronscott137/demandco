<?php
/*
Template Name: Home
*/
global $home;
$home = get_post_meta(get_the_ID(), $home->get_the_id(), TRUE);
get_header();?>
<div class="hero">
    <div class="container">
        <img class="img-responsive logo" src="<?php echo get_stylesheet_directory_uri();?>/images/footer_logo.svg">
            <div class="row">
              <div class="col-sm-10 page-header">
                  <h1 itemprop="headline"><?php echo $home['heading-title'];?></h1>
                  <h2 itemprop="description"><?php echo $home['heading-description'];?></h2>
                  <!--<img class="home-header img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_header.png" alt="Header iPad">-->
              </div> <!-- /col md 12 -->
            </div><!-- /row --> 
  </div><!-- /container -->
</div><!-- /hero -->

<main class="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
      <div class="violator grey">
            <div class="container">
                  <div class="col-md-8">
                        <h2 itemprop="headline"><?php echo $home['violator-title'];?></h2>
                        <p itemprop="description"><?php echo $home['violator-description'];?></p>
                  </div><!-- /col-md-8 -->
                  <div class="col-md-4 button">
                        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact"><?php echo $home['violator-btn'];?></a>
                  </div><!-- /col-md-6 -->
            </div><!-- /container -->
      </div><!-- /violator -->
    <div class="container container-home">    
        <div class="row tradigital">
        	<h1 class="section-title" itemprop="headline"><?php echo $home['tradigital-title'];?></h1>
        	<div class="lede">
            <p class="intro" itemprop="description"><?php echo $home['tradigital-description'];?></p>
          </div>
      	<div class="col-md-4">
              <h2><?php echo $home['tradigital-col1-head'];?></h2>
              <p><?php echo $home['tradigital-col1-desc'];?></p>
		    </div> <!-- /col-md-4 -->
      		<div class="col-md-4">
              <h2><?php echo $home['tradigital-col2-head'];?></a></h2>
              <p><?php echo $home['tradigital-col2-desc'];?></p>
		    </div> <!-- /col-md-4 -->
      		<div class="col-md-4">	
              <h2><?php echo $home['tradigital-col3-head'];?></h2>
              <p><?php echo $home['tradigital-col3-desc'];?></p>
		    </div> <!-- /col-md-4 -->
		</div>
    </div><!-- /container -->

    <div class="home-features flexslider">
	      <div class="container container-home">
          <ul class="slides">
		        <li class="col-md-12">
			        <p class="center-block"><?php echo $home['blue-section-text'];?></p>
              <!--<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact"><?php echo $home['violator-btn'];?></a>-->
		        </li><!-- /col-md-6" -->
            
	      </div><!-- /container -->
    </div><!-- /hero -->



  <div class="social">
    <div class="container container-home">
      <div class="row">
        <!--
	<h1 class="section-title">Follow Us And Stay On Top Of Demand</h1>
	-->
        <div class="col-xs-12">
        	<a href="https://www.facebook.com/getdemand" target="_blank">
        	<i class="fa fa-facebook fa-lg"></i>
        	</a>
          <a href="http://www.twitter.com/getdemand" target="_blank">
                <i class="fa fa-twitter fa-lg"></i>
          </a>
          <a href="https://www.linkedin.com/company/demandco-llc" target="_blank">
                    <i class="fa fa-linkedin fa-lg"></i>
          </a>
          <a href="https://plus.google.com/u/1/b/102036417861010965621/102036417861010965621/about" target="_blank">
                    <i class="fa fa-google-plus fa-lg"></i>
          </a>
        </div>
       

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /social -->

  <div class="violator">
        <div class="container">
              <div class="col-md-8">
                    <h2 itemprop="headline"><?php echo $home['violator3-title'];?></h2>
                    <p itemprop="description"><?php echo $home['violator3-description'];?></p>
              </div><!-- /col-md-8 -->
              <div class="col-md-4 button">
                    <a class="btn btn-primary btn-lg" data-toggle="modal" data-toggle="modal" data-target="#contact"><?php echo $home['violator3-btn'];?></a>
              </div><!-- /col-md-6 -->
        </div><!-- /container -->
  </div><!-- /violator -->

</main><!-- /main -->

 <?php get_footer(); ?>