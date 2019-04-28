<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( "Jenny Hirons —", true, "Left" ); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.png">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <h1><a href="/">Jenny Hirons Studio</a></h1>
    <h2><?php the_title(); ?></h2>
    <nav>
      <ul>
        <!-- <li class="state--projects">
          <span>Projects</span>
          <ul>
            <li class="state">All</li>
            <li>Design</li>
            <li>Illustration</li>
          </ul>
        </li> -->
        <li class="state--projects"><a href="/projects">Projects</a></li>
        <li class="state--about"><a href="/about">About</a></li>
        <li><a href="mailto:jennyhirons@gmail.com">Contact</a></li>
      </ul>
      <div class="button">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg">
      </div>
    </nav>
  </header>
