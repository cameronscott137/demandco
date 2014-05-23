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

<script type="text/javascript">
var _ss = _ss || [];
_ss.push(['_setDomain', 'https://koi-NTJGC2.sharpspring.com/net']);
_ss.push(['_setAccount', 'KOI-Q0Q162']);
_ss.push(['_trackPageView']);
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;
    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-NTJGC2.sharpspring.com/client/ss.js?ver=1.1.1';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>

<?php if (is_page('contact') ){ ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABCwJzMiFzDbmhvNS-VDW94Ve1woyKUTs&sensor=true"></script>
  <?php } ?>
<?php wp_head(); ?>
</head>
<?php flush(); ?>
  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
