<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php get_header(); ?>


<main id="content">
    <div id="content" class="container-fluid">

        <?php do_action( 'zenflow_yoga_before_banner-sectionone' ); ?>

        <?php get_template_part( 'template-parts/home-sections/banner-sectionone' ); ?>

        <?php do_action( 'zenflow_yoga_before_section_post' ); ?>

        <?php get_template_part( 'template-parts/home-sections/section-post' ); ?>

        <?php do_action( 'zenflow_yoga_before_section1' ); ?>

        <?php get_template_part( 'template-parts/home-sections/section1' ); ?>
    </div>
</main>

<?php get_footer(); ?>
