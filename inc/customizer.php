<?php
/**
 * Add custom settings and controls to the WordPress Customizer
 */


//---------------------Code to add the Upgrade to Pro button in the Customizer----------

function zenflow_yoga_customize_register_btn( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    get_template_part('inc/customizer-button/upsell-section');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'zenflow_yoga_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'zenflow_yoga_customize_partial_blogdescription',
        ) );
    }

    $wp_customize->register_section_type( 'Zenflow_Yoga_Customize_Upsell_Section' );

    // Register section.
    $wp_customize->add_section(
        new Zenflow_Yoga_Customize_Upsell_Section(
            $wp_customize,
            'theme_upsell',
            array(
                'title'    => esc_html__( 'Zenflow Yoga Pro', 'zenflow-yoga' ),
                'pro_text' => esc_html__( 'Upgrade To Pro', 'zenflow-yoga' ),
                'pro_url'  => 'https://cawpthemes.com/zenflow-yoga-premium-wordpress-theme/',
                'priority' => 1,
            )
        )
    );
}
add_action( 'customize_register', 'zenflow_yoga_customize_register_btn' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function zenflow_yoga_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function zenflow_yoga_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zenflow_yoga_customize_preview_js() {
    wp_enqueue_script( 'zenflow-yoga-customizer', get_template_directory_uri() . '/inc/customizer-button/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'zenflow_yoga_customize_preview_js' );

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.0
 */
function zenflow_yoga_customizer_control_scripts() {

    wp_enqueue_style( 'zenflow-yoga-customize-controls', get_template_directory_uri() . '/inc/customizer-button/customize-controls.css', '', '1.0.0' );

    wp_enqueue_script( 'zenflow-yoga-customize-controls', get_template_directory_uri() . '/inc/customizer-button/customize-controls.js', array( 'customize-controls' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'zenflow_yoga_customizer_control_scripts', 0 );


//---------------------Code to add the Upgrade to Pro button in the Customizer End----------


//------------------Theme Information--------------------

function zenflow_yoga_customize_register( $wp_customize ) {


      // Add a custom setting for the Site Identity color
  $wp_customize->add_setting( 'zenflow_yoga_site_identity_color', array(
    'default' => '#000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zenflow_yoga_site_identity_color', array(
    'label' => __( 'Site Identity Color', 'zenflow-yoga' ),
    'section' => 'title_tagline',
    'settings' => 'zenflow_yoga_site_identity_color',
  ) ) );


  // Add a custom setting for the Site Identity color
  $wp_customize->add_setting( 'zenflow_yoga_site_identity_tagline_color', array(
    'default' => '#000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zenflow_yoga_site_identity_tagline_color', array(
    'label' => __( 'Tagline Color', 'zenflow-yoga' ),
    'section' => 'title_tagline',
    'settings' => 'zenflow_yoga_site_identity_tagline_color',
  ) ) );

//------------------Site Identity Ends---------------------

  
  // Add a custom setting for the primary color
  $wp_customize->add_setting( 'zenflow_yoga_primary_color', array(
    'default' => '#b1d4a1',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zenflow_yoga_primary_color', array(
    'label' => __( 'Primary Color', 'zenflow-yoga' ),
    'section' => 'colors',
    'settings' => 'zenflow_yoga_primary_color',
  ) ) );

  //-----------------------------------Home Front Page-------------------------------

  $wp_customize->add_panel( 'zenflow_yoga_panel', array(
    'title'    => __( 'Front Page Settings', 'zenflow-yoga' ),
    'priority' => 6,
  ) );


  //-------------------------------------Banner Image Section--------------

      $wp_customize->add_section( 'zenflow_yoga_section_banner', array(
        'title'    => __( 'Home First Section', 'zenflow-yoga' ),
        'priority' => 8,
        'panel'    => 'zenflow_yoga_panel',
    ) );


  //-----------------Enable Option banner-------------

  $wp_customize->add_setting('zenflow_yoga_section_banner',array(
      'default' => 'Enable',
      'sanitize_callback' => 'zenflow_yoga_sanitize_choices'
  ));
  $wp_customize->add_control('zenflow_yoga_section_banner',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'zenflow-yoga'),
        'section' => 'zenflow_yoga_section_banner',
        'choices' => array(
            'Enable' => __('Enable', 'zenflow-yoga'),
            'Disable' => __('Disable', 'zenflow-yoga')
  )));

  $wp_customize->add_setting('zenflow_yoga_section_bannerimage_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'zenflow_yoga_section_bannerimage_section',array(
    'label' => __('Right Image','zenflow-yoga'),
    'description' => __('Dimention 500 * 720','zenflow-yoga'),
    'section' => 'zenflow_yoga_section_banner',
    'settings' => 'zenflow_yoga_section_bannerimage_section'
  )));

    $wp_customize->add_setting('zenflow_yoga_section_bannerimage_section_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_section_bannerimage_section_title',array(
      'label' => __('Left Main Title','zenflow-yoga'),
      'section' => 'zenflow_yoga_section_banner',
      'setting' => 'zenflow_yoga_section_bannerimage_section_title',
      'type'    => 'text'
    )
  ); 

      $wp_customize->add_setting('zenflow_yoga_section_bannerimage_section_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_section_bannerimage_section_text',array(
      'label' => __('Left Sub Text','zenflow-yoga'),
      'section' => 'zenflow_yoga_section_banner',
      'setting' => 'zenflow_yoga_section_bannerimage_section_text',
      'type'    => 'textarea'
    )
  );

  // ---------

    $wp_customize->add_setting('zenflow_yoga_section_bannerimage_right_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'zenflow_yoga_section_bannerimage_right_section',array(
    'label' => __('Box Image','zenflow-yoga'),
    'description' => __('Dimention 400 * 400','zenflow-yoga'),
    'section' => 'zenflow_yoga_section_banner',
    'settings' => 'zenflow_yoga_section_bannerimage_right_section'
  )));

    $wp_customize->add_setting('zenflow_yoga_section_bannerimage_section_right_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_section_bannerimage_section_right_title',array(
      'label' => __('Box Main Title','zenflow-yoga'),
      'section' => 'zenflow_yoga_section_banner',
      'setting' => 'zenflow_yoga_section_bannerimage_section_right_title',
      'type'    => 'text'
    )
  ); 

      $wp_customize->add_setting('zenflow_yoga_section_bannerimage_section_right_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_section_bannerimage_section_right_text',array(
      'label' => __('Box Text','zenflow-yoga'),
      'section' => 'zenflow_yoga_section_banner',
      'setting' => 'zenflow_yoga_section_bannerimage_section_right_text',
      'type'    => 'textarea'
    )
  );





  //--------------------------------------General Settings------------------------------------------

  $wp_customize->add_section( 'zenflow_yoga_general', array(
        'title'    => __( 'General Settings', 'zenflow-yoga' ),
        'panel'    => 'zenflow_yoga_panel',
    ) );



    $wp_customize->add_setting( 'zenflow_yoga_header_toggle_switch_control', array(
        'default'   => true,
        'sanitize_callback' => 'sanitize_text_field', // Use a suitable sanitization function based on your needs
        'transport' => 'refresh', // or 'postMessage' for instant preview without page refresh
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'zenflow_yoga_header_toggle_switch_control', array(
        'label'    => __( 'Display Read More Button', 'zenflow-yoga' ),
        'section'  => 'zenflow_yoga_general',
        'settings' => 'zenflow_yoga_header_toggle_switch_control',
        'type'     => 'checkbox',
    ) ) );

      $wp_customize->add_setting('zenflow_yoga_read_more_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_read_more_title',array(
      'label' => __('Read More Button Text','zenflow-yoga'),
      'section' => 'zenflow_yoga_general',
      'setting' => 'zenflow_yoga_read_more_title',
      'type'    => 'text'
    )
  );

      $wp_customize->add_setting('zenflow_yoga_read_more_title_url',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_read_more_title_url',array(
      'label' => __('Read More Button URL','zenflow-yoga'),
      'section' => 'zenflow_yoga_general',
      'setting' => 'zenflow_yoga_read_more_title_url',
      'type'    => 'text'
    )
  );


  //-------------------------Section Post (Featured Post)------------------------------------------

  $wp_customize->add_section( 'zenflow_yoga_section_blog_post', array(
        'title'    => __( 'Blog Post', 'zenflow-yoga' ),
        'priority' => 10,
        'panel'    => 'zenflow_yoga_panel',
    ) );


  //-----------------Enable Option Section One-------------

  $wp_customize->add_setting('zenflow_yoga_section_blog_post_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'zenflow_yoga_sanitize_choices'
  ));
  $wp_customize->add_control('zenflow_yoga_section_blog_post_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'zenflow-yoga'),
        'section' => 'zenflow_yoga_section_blog_post',
        'choices' => array(
            'Enable' => __('Enable', 'zenflow-yoga'),
            'Disable' => __('Disable', 'zenflow-yoga')
  )));


  $wp_customize->add_setting('zenflow_yoga_section_blog_post_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_section_blog_post_title',array(
      'label' => __('Section Title','zenflow-yoga'),
      'section' => 'zenflow_yoga_section_blog_post',
      'setting' => 'zenflow_yoga_section_blog_post_title',
      'type'    => 'text'
    )
  );

  //-----------Category------------

  $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
    if($i==0){
      $default = $category->name;
      $i++;
    }
    $cats[$category->name] = $category->name;
  }

  $wp_customize->add_setting('zenflow_yoga_section_blog_post_category',array(
  'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('zenflow_yoga_section_blog_post_category',array(
    'type'    => 'select',
    'choices' => $cats,
    'label' => __('Select Category to Display Post','zenflow-yoga'),
    'section' => 'zenflow_yoga_section_blog_post',
    'sanitize_callback' => 'sanitize_text_field',
  ));



    $wp_customize->add_setting('zenflow_yoga_section_blog_post_category_number',array(
    'default' => '3',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('zenflow_yoga_section_blog_post_category_number',array(
    'label' => __('Number of Posts to display','zenflow-yoga'),
    'section' => 'zenflow_yoga_section_blog_post',
    'setting' => 'zenflow_yoga_section_blog_post_category_number',
    'type'    => 'number'
  )); 





  //-------------------------Section One (Featured Post)------------------------------------------

  $wp_customize->add_section( 'zenflow_yoga_section1', array(
        'title'    => __( 'Category Post', 'zenflow-yoga' ),
        'priority' => 10,
        'panel'    => 'zenflow_yoga_panel',
    ) );


  //-----------------Enable Option Section One-------------

  $wp_customize->add_setting('zenflow_yoga_section1_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'zenflow_yoga_sanitize_choices'
  ));
  $wp_customize->add_control('zenflow_yoga_section1_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'zenflow-yoga'),
        'section' => 'zenflow_yoga_section1',
        'choices' => array(
            'Enable' => __('Enable', 'zenflow-yoga'),
            'Disable' => __('Disable', 'zenflow-yoga')
  )));


  $wp_customize->add_setting('zenflow_yoga_zenflow_yoga_section_one_section_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('zenflow_yoga_zenflow_yoga_section_one_section_title',array(
      'label' => __('Section Title','zenflow-yoga'),
      'section' => 'zenflow_yoga_section1',
      'setting' => 'zenflow_yoga_zenflow_yoga_section_one_section_title',
      'type'    => 'text'
    )
  );

  //-----------Category------------

  $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
    if($i==0){
      $default = $category->name;
      $i++;
    }
    $cats[$category->name] = $category->name;
  }

  $wp_customize->add_setting('zenflow_yoga_section1_category',array(
  'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('zenflow_yoga_section1_category',array(
    'type'    => 'select',
    'choices' => $cats,
    'label' => __('Select Category to Display Post','zenflow-yoga'),
    'section' => 'zenflow_yoga_section1',
    'sanitize_callback' => 'sanitize_text_field',
  ));



    $wp_customize->add_setting('zenflow_yoga_section1_category_number_of_posts_setting',array(
    'default' => '3',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('zenflow_yoga_section1_category_number_of_posts_setting',array(
    'label' => __('Number of Posts to display','zenflow-yoga'),
    'section' => 'zenflow_yoga_section1',
    'setting' => 'zenflow_yoga_section1_category_number_of_posts_setting',
    'type'    => 'number'
  )); 



  //-------------------------Footer Settings------------------------------


    $wp_customize->add_section( 'zenflow_yoga_footer', array(
        'title'    => __( 'Footer Settings', 'zenflow-yoga' ),
        'priority' => 10,
        'panel'    => 'zenflow_yoga_panel',
    ) );


  // Add a custom setting for the footer text
  $wp_customize->add_setting( 'zenflow_yoga_footer_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  // Add a custom control for the footer text
  $wp_customize->add_control( 'zenflow_yoga_footer_text', array(
    'label' => __( 'Footer Text', 'zenflow-yoga' ),
    'section' => 'zenflow_yoga_footer',
    'type' => 'text',
  ) );

 //-------------------404 Page-----------

  $wp_customize->add_section( 'zenflow_yoga_404page', array(
    'title'    => __( '404 Page Settings', 'zenflow-yoga' ),
    'priority' => 12,
    'panel'    => 'zenflow_yoga_panel',
    ) );


  // Add a custom setting for the footer text
  $wp_customize->add_setting( 'zenflow_yoga_404page_title', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  // Add a custom control for the footer text
  $wp_customize->add_control( 'zenflow_yoga_404page_title', array(
    'label' => __( 'Page Not Found Title', 'zenflow-yoga' ),
    'section' => 'zenflow_yoga_404page',
    'type' => 'text',
  ) );

  // Add a custom setting for the footer text
  $wp_customize->add_setting( 'zenflow_yoga_404page_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  // Add a custom control for the footer text
  $wp_customize->add_control( 'zenflow_yoga_404page_text', array(
    'label' => __( 'Page Not Found Text', 'zenflow-yoga' ),
    'section' => 'zenflow_yoga_404page',
    'type' => 'text',
  ) );


//--------------------------------------General Settings------------------------------------------

  $wp_customize->add_section( 'zenflow_yoga_general', array(
        'title'    => __( 'General Settings', 'zenflow-yoga' ),
        'panel'    => 'zenflow_yoga_panel',
    ) );

    $wp_customize->add_setting( 'zenflow_yoga_post_meta_toggle_switch_control', array(
        'default'   => true,
        'sanitize_callback' => 'sanitize_text_field', // Use a suitable sanitization function based on your needs
        'transport' => 'refresh', // or 'postMessage' for instant preview without page refresh
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'zenflow_yoga_post_meta_toggle_switch_control', array(
        'label'    => __( 'Display Time/Author', 'zenflow-yoga' ),
        'section'  => 'zenflow_yoga_general',
        'settings' => 'zenflow_yoga_post_meta_toggle_switch_control',
        'type'     => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'zenflow_yoga_post_readmore_toggle_switch_control', array(
        'default'   => true,
        'sanitize_callback' => 'sanitize_text_field', // Use a suitable sanitization function based on your needs
        'transport' => 'refresh', // or 'postMessage' for instant preview without page refresh
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'zenflow_yoga_post_readmore_toggle_switch_control', array(
        'label'    => __( 'Display Readmore Link', 'zenflow-yoga' ),
        'section'  => 'zenflow_yoga_general',
        'settings' => 'zenflow_yoga_post_readmore_toggle_switch_control',
        'type'     => 'checkbox',
    ) ) );



}
add_action( 'customize_register', 'zenflow_yoga_customize_register' );



