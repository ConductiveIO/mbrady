<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"
	<?php endif; ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <nav id="nav">
      <ul>
        <li><a href="/contact">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Artists</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>

  <div id="main" class="site-main">