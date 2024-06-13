<?php
//about theme info
add_action( 'admin_menu', 'zenflow_yoga_gettingstarted_page' );
function zenflow_yoga_gettingstarted_page() {      
    add_theme_page( esc_html__('Zenflow Yoga', 'zenflow-yoga'), esc_html__('All About Zenflow Yoga', 'zenflow-yoga'), 'edit_theme_options', 'zenflow_yoga_mainpage', 'zenflow_yoga_mostrar_guide');   
}


function zenflow_yoga_notice() {
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
        <div class="notice-content">
            <p><?php _e( 'Thank You For Choosing CA WP Themes', 'zenflow-yoga' ); ?></p>
            <h2><?php _e( 'Thank You for installing Zenflow Yoga Free Theme!', 'zenflow-yoga' ) ?> </h2>
            <p><?php _e( "Please Click on the link below to Check The Full Theme Edit Documentation", 'zenflow-yoga' ) ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php _e( 'Documentation', 'zenflow-yoga' ); ?></a>
            </div>
            <h2><?php esc_html_e( 'Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'zenflow-yoga' ) ?> </h2>
            <h2><?php _e( 'Check The Pro Version: Zenflow Yoga Premium for Amazing Features for Unlimited Site', 'zenflow-yoga' ); ?></h2>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_URL ); ?>" target="_blank"> <?php _e( 'Upgrade to Pro', 'zenflow-yoga' ); ?></a>
            </div>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_DEMO ); ?>" target="_blank"> <?php _e( 'Premium Demo', 'zenflow-yoga' ); ?></a>
            </div>
        </div>
    </div>
    <?php }
}

add_action( 'admin_notices', 'zenflow_yoga_notice' );





// Add a Custom CSS file to WP Admin Area
function zenflow_yoga_admin_page_theme_style() {
   wp_enqueue_style('zenflow-yoga-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
}
add_action('admin_enqueue_scripts', 'zenflow_yoga_admin_page_theme_style');

//About Theme Info
function zenflow_yoga_mostrar_guide() { 

    //custom function about theme customizer

    $return = add_query_arg( array()) ;
    $theme = wp_get_theme( 'zenflow-yoga' );
?>

<div class="wrapper-info">
    <div class="col-left">
        <h2><?php esc_html_e( 'Welcome to Zenflow Yoga Theme', 'zenflow-yoga' ); ?> <span class="version">Version: 1.0</span></h2>
        <p><?php esc_html_e('CA WP Themes is a premium WordPress theme development company that provides high-quality themes for various types of websites. They specialize in creating themes for businesses, eCommerce, portfolios, blogs, and many more. Their themes are easy to use and customize, making them perfect for those who want to create a professional-looking website without any coding skills.','zenflow-yoga'); ?></p>
        <p><?php esc_html_e('CA WP Themes offers a wide range of themes that are designed to be responsive and compatible with the latest versions of WordPress. Our themes are also SEO optimized, ensuring that your website will rank well on search engines. They come with a variety of features such as customizable widgets, social media integration, and custom page templates.','zenflow-yoga'); ?></p>
        <p><?php esc_html_e('One of the unique things about CA WP Themes is their focus on providing excellent customer support. They have a dedicated team of support staff who are available 24/7 to help customers with any issues they may encounter. Their support team is knowledgeable and friendly, ensuring that customers receive the best possible experience.','zenflow-yoga'); ?></p>
    </div>
    <div class="col-right">
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Buy Zenflow Yoga Premium Theme','zenflow-yoga'); ?></h4>
            <p><?php esc_html_e('Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'zenflow-yoga'); ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'zenflow-yoga' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Premium Theme Demo','zenflow-yoga'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'zenflow-yoga' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Need Support? / Contact Us','zenflow-yoga'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Contact Us', 'zenflow-yoga' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Documentation','zenflow-yoga'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Docs', 'zenflow-yoga' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Free Theme','zenflow-yoga'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( zenflow_yoga_FREE_URL ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'zenflow-yoga' ); ?></a>
            </div>
        </div>

    </div>
</div>


<div class="new_box">
     <div class="featurebox">
        <h3><?php esc_html_e( 'Theme Information', 'zenflow-yoga' ); ?></h3>
        <div class="table-image">
            <table class="tablebox">
                <thead>
                    <tr>
                        <th></th>
                        <th><?php esc_html_e('Free Themes', 'zenflow-yoga'); ?></th>
                        <th><?php esc_html_e('Premium Themes', 'zenflow-yoga'); ?></th>
                    </tr>   
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e('Theme Edit Options', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Responsive Design', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Logo Upload', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Social Media Links', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Slider Settings', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('About Us Page', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Template Pages', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><?php esc_html_e('2', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><?php esc_html_e('5', 'zenflow-yoga'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Home Page Template', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><?php esc_html_e('1', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><?php esc_html_e('1', 'zenflow-yoga'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Home Page sections', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><?php esc_html_e('2', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><?php esc_html_e('10 to 15', 'zenflow-yoga'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Contact us Page Template', 'zenflow-yoga'); ?></td>
                        <td class="table-img">0</td>
                        <td class="table-img"><?php esc_html_e('1', 'zenflow-yoga'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Blog Templates & Layout', 'zenflow-yoga'); ?></td>
                        <td class="table-img">0</td>
                        <td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'zenflow-yoga'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Page Templates & Layout', 'zenflow-yoga'); ?></td>
                        <td class="table-img">0</td>
                        <td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'zenflow-yoga'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Global Color Option', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Inbuild Demo Content', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Full Documentation Available', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Latest WordPress Compatibility', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Woo-Commerce Compatibility', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Support 3rd Party Plugins', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Secure and Optimized Code', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Exclusive Premium Functionalities', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Section Enable / Disable Option', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Gallery Section', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Support to Provide Additional Required Custom CSS / JS ', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Shortcodes Available', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Premium Membership', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Budget Friendly Value', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Priority Error Fixing', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Feature Addition', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('All Access Theme Pass', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Seamless Customer Support', 'zenflow-yoga'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="table-img"></td>
                        <td class="update-link"><a href="<?php echo esc_url( zenflow_yoga_PRO_URL ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'zenflow-yoga'); ?></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</div>
<?php } ?>