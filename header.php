<?php

/**
 * The Header for our theme.
 *
 * @package zenflow-yoga
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php do_action('wp_body_open'); ?>
  <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html__('Skip to content', 'zenflow-yoga'); ?></a>

  <div class="container-fluid header-color-class">
    <div class="row" id="navbar-saomai">

      <div class="col-lg-1 col-12">
        <div class="head-banner-img">
          <?php if (get_header_image()) : ?>
            <div class="site-img-header">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src='<?php echo esc_url(get_header_image()); ?>' alt='Banner Image'>
              </a>
            </div>
            <div class="site-branding">
              <?php if (has_custom_logo()) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
              <?php endif; ?>
            </div>
          <?php else : ?>
            <div class="display_only">
              <?php if (has_custom_logo()) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php else : ?>
                <h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-8 col-12">
        <header id="Main-head-class" class="site-header">
          <!-- before header hook -->
          <?php do_action('zenflow_yoga-_before_header'); ?>
          <?php get_template_part('template-parts/header/header-file'); ?>
        </header>
      </div>
      <div class="col-lg-2 col-12">
        <div class="wrap-search-action">
          <button type="button" id="custom-search-button" class="custom-search-button">
            <span>Search</span>
            <span>X</span>
          </button>
          <button type="button" id="custom-search-button" class="custom-search-button">
            <span>VN</span>
          </button>

        </div>
      </div>
    </div>
    <div class="form_search_wordpress"><?php get_search_form(); ?></div>
  </div>