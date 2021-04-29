<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_construction_estate_first_color = get_theme_mod('vw_construction_estate_first_color');

	$custom_css = '';

	if($vw_construction_estate_first_color != false){
		$custom_css .='#header .socialicons, .menu-searh, .slider .carousel-control-prev-icon i, .slider .carousel-control-next-icon i, .contact-btn a, .about-btn a, .footer, .sidebar input[type="submit"], .footer input[type="submit"], .footer-2, .scrollup i, .sidebar h3, .read_full a, h1.entry-title, h1.page-title, .sidebar td#today, .footer a.custom_read_more, .sidebar a.custom_read_more{';
			$custom_css .='background-color: '.esc_html($vw_construction_estate_first_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$custom_css .='p.diff-lay, .contact-no span, .contact-btn a:hover, .about-section h3, .sidebar th, .sidebar td{';
			$custom_css .='color: '.esc_html($vw_construction_estate_first_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$custom_css .='.contact-btn a{';
			$custom_css .='border-color: '.esc_html($vw_construction_estate_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$custom_css .='.sidebar h3:after{';
			$custom_css .='border-top-color: '.esc_html($vw_construction_estate_first_color).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_construction_estate_second_color = get_theme_mod('vw_construction_estate_second_color');

	if($vw_construction_estate_second_color != false){
		$custom_css .='.slider .more-btn a:hover, .contact-btn a:hover, .about-btn a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .read_full a:hover, nav.woocommerce-MyAccount-navigation ul li, .entry-audio audio, .pagination .current, .pagination a:hover, #header .custom-social-icons i:hover, .footer .custom-social-icons i:hover, .sidebar .custom-social-icons i:hover, a.button, .footer .tagcloud a:hover, .sidebar .tagcloud a:hover, input[type="submit"], #comments a.comment-reply-link, .toggle-nav i, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .sidebar .woocommerce-product-search button, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .sidebar a.custom_read_more:hover, .footer a.custom_read_more:hover{';
			$custom_css .='background-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='#comments input[type="submit"].submit{';
			$custom_css .='background-color: '.esc_html($vw_construction_estate_second_color).'!important;';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='a, .logo h1 a, .logo p, .top-header i, .contact-no i, .footer h3, .footer .custom-social-icons i, .sidebar .custom-social-icons i, .scrollup i, .postbox:hover h4 a, .postbox:hover i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .sidebar td#prev a, .entry-content a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .logo p.site-title a, .footer a.custom_read_more{';
			$custom_css .='color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.slider .more-btn a:hover, .contact-btn a:hover, .scrollup i, input[type="submit"], .footer a.custom_read_more{';
			$custom_css .='border-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.footer-2, hr.big, .main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.footer h3, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.slider .inner_carousel h1{';
			$custom_css .='border-right-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.about-section h3{';
			$custom_css .='border-left-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='#contact{
		background: rgba(0, 0, 0, 0)linear-gradient(90deg, #fff 25%,'.esc_html($vw_construction_estate_second_color).' 25%) repeat scroll 0 0;
		}';
	}
	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*--------------------------- Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_slider_content_option','Right');
    if($theme_lay == 'Left'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
		$custom_css .='.slider .inner_carousel h1{';
			$custom_css .='border-left: 2px solid #f68021; border-right:none;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%; border-right:none;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.postbox smallpostimage{';
			$custom_css .='';
		$custom_css .='}';
		$custom_css .='.new-text{';
			$custom_css .='padding: 10px 25px;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.postbox smallpostimage, .postbox h2, .postbox .metabox, .box-content p, .testbutton, .read_full,.postbox .box-image{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.postbox hr.big{';
			$custom_css .='margin:0 auto;';
		$custom_css .='}';
		$custom_css .='.box-content p, .postbox .metabox{';
			$custom_css .='margin-top: 10px;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.postbox smallpostimage, .postbox h2, .postbox .metabox, .box-content p, .testbutton{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.box-content p,.postbox h2.section-title{';
			$custom_css .='margin-top: 10px;';
		$custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$topbar = get_theme_mod( 'vw_construction_estate_resp_topbar_hide_show',true);
    if($topbar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.top-header{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($topbar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.top-header{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$stickyheader = get_theme_mod( 'vw_construction_estate_stickyheader_hide_show',true);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.header-fixed{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.header-fixed{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$stickyheader = get_theme_mod( 'vw_construction_estate_resp_slider_hide_show',true);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$metabox = get_theme_mod( 'vw_construction_estate_metabox_hide_show',true);
    if($metabox == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.metabox{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($metabox == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.metabox{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$sidebar = get_theme_mod( 'vw_construction_estate_sidebar_hide_show',true);
    if($sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_construction_estate_topbar_padding_top_bottom = get_theme_mod('vw_construction_estate_topbar_padding_top_bottom');
	if($vw_construction_estate_topbar_padding_top_bottom != false){
		$custom_css .='.top-header{';
			$custom_css .='padding-top: '.esc_html($vw_construction_estate_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_construction_estate_topbar_padding_top_bottom).';';
		$custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_construction_estate_button_padding_top_bottom = get_theme_mod('vw_construction_estate_button_padding_top_bottom');
	$vw_construction_estate_button_padding_left_right = get_theme_mod('vw_construction_estate_button_padding_left_right');
	if($vw_construction_estate_button_padding_top_bottom != false || $vw_construction_estate_button_padding_left_right != false){
		$custom_css .='.read_full a{';
			$custom_css .='padding-top: '.esc_html($vw_construction_estate_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_construction_estate_button_padding_top_bottom).';padding-left: '.esc_html($vw_construction_estate_button_padding_left_right).';padding-right: '.esc_html($vw_construction_estate_button_padding_left_right).';';
		$custom_css .='}';
	}

	$vw_construction_estate_button_border_radius = get_theme_mod('vw_construction_estate_button_border_radius');
	if($vw_construction_estate_button_border_radius != false){
		$custom_css .='.read_full a{';
			$custom_css .='border-radius: '.esc_html($vw_construction_estate_button_border_radius).'px;';
		$custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_construction_estate_copyright_alingment = get_theme_mod('vw_construction_estate_copyright_alingment');
	if($vw_construction_estate_copyright_alingment != false){
		$custom_css .='.copyright p{';
			$custom_css .='text-align: '.esc_html($vw_construction_estate_copyright_alingment).';';
		$custom_css .='}';
	}

	$vw_construction_estate_copyright_padding_top_bottom = get_theme_mod('vw_construction_estate_copyright_padding_top_bottom');
	if($vw_construction_estate_copyright_padding_top_bottom != false){
		$custom_css .='.footer-2{';
			$custom_css .='padding-top: '.esc_html($vw_construction_estate_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_construction_estate_copyright_padding_top_bottom).';';
		$custom_css .='}';
	}