<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if lte IE 7]>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <?php include('ie7.php');?>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon.png"/>
<meta name="application-name" content="Atmosferiq"/>
<!-- Windows 8 -->
<meta name="msapplication-TileColor" content="#1e6fec"/>
<meta name="msapplication-square70x70logo" content="tiny.png"/>
<meta name="msapplication-square150x150logo" content="square.png"/>
<meta name="msapplication-wide310x150logo" content="wide.png"/>
<meta name="msapplication-square310x310logo" content="large.png"/>
<!-- Twitter Cards -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Atmosferiq is marketing-mix management software that integrates online and offline channels into a single tool." />
<meta name="twitter:site" content="@Nielsen" />
<meta name="twitter:title" content="Nielsen Catalina Solutions" />
<meta name="twitter:url" content="https://www.ncssolutions.com" />

<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/html5shiv.js" type="text/javascript"></script>
    <script src="http://atmosferiq.com/wp-content/themes/starter-theme/bootstrap/js/respond.min.js" type="text/javascript"></script>
<![endif]-->
<!-- Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42099303-1', 'atmosferiq.com');
  ga('send', 'pageview');

</script>
<?php if (is_page('contact') ){ ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABCwJzMiFzDbmhvNS-VDW94Ve1woyKUTs&sensor=true"></script>
  <?php } ?>
<?php wp_head(); ?>
</head>
<?php flush(); ?>
  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div class="navbar-wrapper fixed">
	     <header role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
              <nav class="navbar navbar-default" role="navigation">
                  <div class="container">
                      <div class="row">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Atmosferiq Logo"></a>
                          </div><!-- navbar-header -->
                          
                  <?php if ( is_page_template('template-landing.php') ) { ?>
                          <div class="navbar-collapse collapse" id="nav">
                                  <nav class="primary" itemscope itemtype="http://schema.org/SiteNavigationElement">
                                      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>') ); ?>
                                  </nav>
                                 <!--<ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" class="pull-right btn btn-default login" data-toggle="modal" data-target="#login">Login</a></li>
                                  </ul>-->
                          </div> <!-- /navbar-collapse -->
                  <? } ?>
                    </div><!-- /row -->
              </div><!-- /container -->
            </div><!-- /navbar -->
      </header>
  </div> <!-- /navbar-wrapper -->