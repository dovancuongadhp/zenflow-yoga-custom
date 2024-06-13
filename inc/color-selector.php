<?php


//-----------------------------Site Identity Color----------------

	$zenflow_yoga_site_identity_color = get_theme_mod('zenflow_yoga_site_identity_color');
	$zenflow_yoga_site_identity_tagline_color = get_theme_mod('zenflow_yoga_site_identity_tagline_color');

//------------------------Primary Color----------------

	$zenflow_yoga_primary_color = get_theme_mod('zenflow_yoga_primary_color');

//=====================Whole CSS===================================


	$custom_css ='.display_only h1 a,.display_only p{';
	
	$custom_css .='}';


//==============Main Setting Section===========================================


// ----------------Site Identity Color--------------------

	if($zenflow_yoga_site_identity_color != false){
		$custom_css .='.display_only h1 a{';
			if($zenflow_yoga_site_identity_color != false)
		    	$custom_css .='color: '.esc_html($zenflow_yoga_site_identity_color).'!important;';
		$custom_css .='}';
	}

	if($zenflow_yoga_site_identity_tagline_color != false){
		$custom_css .='.display_only p{';
			if($zenflow_yoga_site_identity_tagline_color != false)
		    	$custom_css .='color: '.esc_html($zenflow_yoga_site_identity_tagline_color).'!important;';
		$custom_css .='}';
	}

// ----------------Primary Color--------------------

	if($zenflow_yoga_primary_color != false){
		$custom_css .='#sidebar .widget-title,div#sidebar h2,#sidebar a:hover , h2.post-title:hover,.display_only h1 a,.readmore-latest a,.section-heading-main h3,.sec2-meta span,.nav-previous a:hover, .nav-next a:hover,footer a:hover{';
			if($zenflow_yoga_primary_color != false)
		    	$custom_css .='color: '.esc_html($zenflow_yoga_primary_color).'!important;';
		$custom_css .='}';
	}

	if($zenflow_yoga_primary_color != false){
		$custom_css .='.wp-block-calendar table th,.button:hover,.theme-btn a,.read-more-link:hover,.singlepost-category a,.card-body a,.entry-meta,.sec2-cat a,.read-btn a,.about-box-1,.about-text-box h3{';
			if($zenflow_yoga_primary_color != false)
		    	$custom_css .='background-color: '.esc_html($zenflow_yoga_primary_color).'!important;';
		$custom_css .='}';
	}




?>