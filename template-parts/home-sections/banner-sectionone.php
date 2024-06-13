<?php
/**
 * Theme banner section
 *
 * @package Zenflow Yoga
 */

// All Function code and function definitions go here...


$zenflow_yoga_section_one = get_theme_mod('zenflow_yoga_section_banner');
if ('Disable' == $zenflow_yoga_section_one) {
    return;
}
?>

<section id="banner-section-first">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="banner-box">
                    <h2><?php echo esc_html(get_theme_mod('zenflow_yoga_section_bannerimage_section_title')); ?></h2>
                    <p><?php echo esc_html(get_theme_mod('zenflow_yoga_section_bannerimage_section_text')); ?></p>
             </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="banner-img-box">
                <?php if(get_theme_mod('zenflow_yoga_section_bannerimage_section')!=''){ ?>
                    <img src="<?php echo esc_url(get_theme_mod('zenflow_yoga_section_bannerimage_section')); ?>" alt="Image">
            <?php } ?>
            </div>
        </div>        
        <div class="col-lg-12 col-12">
            <div class="top-box">
                 <h2><?php echo esc_html(get_theme_mod('zenflow_yoga_section_bannerimage_section_right_title')); ?></h2>
                <?php if(get_theme_mod('zenflow_yoga_section_bannerimage_right_section')!=''){ ?>
                    <img src="<?php echo esc_url(get_theme_mod('zenflow_yoga_section_bannerimage_right_section')); ?>" alt="Image">
            <?php } ?>
            <p><?php echo esc_html(get_theme_mod('zenflow_yoga_section_bannerimage_section_right_text')); ?></p>
            </div>
        </div>
    </div>
        
</section>
