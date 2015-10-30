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
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.jpg">

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Custom style -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/spaghrecords.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
    
	<?php wp_head(); ?>
    
	<!-- G.A. Tracker -->
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-8222119-19']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body <?php body_class(); ?>>
	<div id="page" class="container">
		<div id="main" class="row">
        <a class="home-link-bar col-xs-12 col-sm-4 col-md-3 col-lg-3" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/spaghrecords-bar.png" alt="Spagh records" /></a>