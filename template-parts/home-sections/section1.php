<?php
/**
 * Theme Section One
 *
 * @package Zenflow Yoga
 */

// All Function code and function definitions go here...

$zenflow_yoga_section_one = get_theme_mod( 'zenflow_yoga_section1_enable' );
if ( 'Disable' == $zenflow_yoga_section_one ) {
  return;
} ?>

<section id="section1" class="featured-posts">
  <div class="post-section-class">
    <div class="heading-class">
        <h3><?php echo esc_html(get_theme_mod('zenflow_yoga_zenflow_yoga_section_one_section_title')); ?></h3>
    </div>
    <div class="row">
      <div class="col-lg-8 col-12">
          <div class="row">
            <?php
              // Define the query to get the latest posts from the "Features" category
              $args = array(
                'category_name' =>  get_theme_mod('zenflow_yoga_section1_category'),
                'posts_per_page' => get_theme_mod('zenflow_yoga_section1_category_number_of_posts_setting'),
                'order' => 'DESC'
              );
              
              $query = new WP_Query( $args );
              
              // Loop through the posts
              while ( $query->have_posts() ) : $query->the_post();
            ?>
            
            <div class="col-lg-6 col-md-4 col-sm-12">
              <div class="post-section-box">
                <div class="post">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                    <?php endif; ?>
                     <?php if ( get_theme_mod( 'zenflow_yoga_post_meta_toggle_switch_control', true ) ) : ?>
                      <div class="sec2-meta">
                        <span><?php echo get_the_date(); ?></span>
                        <span><?php echo get_the_author(); ?></span>
                      </div>
                    <?php else : ?>
                    <!-- Content to display when the toggle switch is OFF -->
                    <?php endif; ?>
                    <h2 class="post-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="latest-content">
                      <?php the_content(); ?>
                    </div>
                     
                </div>          
              </div>

            </div>
            
            <?php endwhile; wp_reset_postdata(); ?>
            
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <?php get_sidebar(); ?>
      </div>
    </div>

</div>
</section>






