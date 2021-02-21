<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css" />

  <?php wp_head(); ?>

</head>

<body>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <?php if (!is_front_page()) { ?>
  <style>
  .header {
    position: static;
    background-image: url('<?=get_template_directory_URI()?>/img/src/home/banner.jpg');
  }
  </style>
  <? } ?>

  <header class="header">
    <div class="container">
      <a href="<?=site_url()?>" class="header-logo">
        <img src="<?=get_template_directory_URI()?>/img/src/logo_branco.png" alt="Logotipo Ricardo Nishimoto" />
      </a>

      <nav class="header-menu" data-menu="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
      </nav>

      <div class="header-buttons">
        <button class="search-button">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#search"></use>
          </svg>
        </button>

        <ul class="header-midias">
          <li>
            <a href="https://instagram.com" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#instagram"></use>
              </svg>
            </a>
          </li>

          <li>
            <a href="https://facebook.com" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>
          </li>

          <li>
            <a href="https://youtube.com" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#youtube"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <button class="menu-hamb" data-menu="button">
        <span></span>
      </button>
    </div>
  </header>