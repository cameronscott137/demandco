<?php
/*
Template Name: Case Study
*/
?>

<!-- Call global metaboxes -->
<?php
      global $case_study;
      $cs = get_post_meta(get_the_ID(), $case_study->get_the_id(), TRUE);
      if ($cs['color'] !== null){
	      $color = $cs['color'];
	  } else {
	  	$color = "#FF3433";
	  }
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
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="logo"><path fill="<?php echo $color;?>" d="M9.55,0H0v33.034h10.802v13.699c14.012-0.626,23.64-10.568,23.64-23.405v-0.157 C34.443,10.02,24.266,0,9.55,0z"/></svg>
        </a>
        <a href="#" class="menu-button pull-right">Menu</a>
    </div>
    <img class="case-study-hero img-responsive" src="<?php echo $cs['hero'];?>">
  </div><!-- /container -->
</div><!-- /hero -->




<section class="main case-study">
    <div class="container intro">    
        <div class="row">
          <div class="col-md-8">
              <h2 class="section-title" itemprop="headline"><?php echo $cs['heading'];?></h2>
              <p itemprop="description"><?php echo $cs['story'];?></p>
          </div>
        </div>
    </div><!-- /container -->

  <section class="portfolio">
      <?php 
        $var = $cs['portfolio'];
          foreach( $var as $v=>$x) {
              switch ($x['format']) {
                case "full":
                  echo "<img class='img-responsive' src='".$x['portfolio-img']."'/>";
                  break;
                case "testimonial": 
                  echo "<div class='container'><div class='row'><div class='col-md-8 testimonial'><p>";
                  echo $x['portfolio-copy'];
                  echo "</p></div></div></div>";
                  break;
                case "left":
                    echo "<div class='container'><div class='row'>";
                    echo "<div class='col-md-6'><p>".$x['portfolio-copy']."</p></div>";
                    echo "<div class='col-md-6'><img class='img-responsive' src='".$x['portfolio-img']."'/></div>";
                    echo "</div></div>";
                  break;
                case "right":
                    echo "<div class='container'><div class='row'>";
                    echo "<div class='col-md-6'><img class='img-responsive' src='".$x['portfolio-img']."'/></div>";
                    echo "<div class='col-md-6'><p>".$x['portfolio-copy']."</p></div>";
                    echo "</div></div>";
                  break;
              }
          }
      ?>
  </section>


  <div class="violator form">
        <div class="container">
              <div class="col-md-6">
                    <h2 itemprop="headline"><?php echo $cs['form-heading'];?></h2>
                    <p itemprop="description"><?php echo $cs['form-copy'];?></p>
              </div><!-- /col-md-8 -->
              <div class="col-md-6">
                  <?php echo do_shortcode('[gravityform id="6" name="Case Study" title="false" description="false" ajax="true"]');?>
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