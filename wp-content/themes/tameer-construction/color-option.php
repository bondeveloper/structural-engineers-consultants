<?php

	$tameer_construction_theme_color = get_theme_mod('tameer_construction_theme_color');

	$tameer_construction_custom_css = '';

	if($tameer_construction_theme_color != false){
		$tameer_construction_custom_css .='.search-box span i, .readbutton a:hover, #about .about-text, .post-link a, #sidebox h2, .search-form button.search-submit, .widget .tagcloud a:hover,
			.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, button.search-submit:hover, .copyright,  .woocommerce span.onsale, button,input[type="button"],input[type="submit"], .logo,.scrollup i,.page-numbers,.comment-reply-link,.post-navigation .nav-next a, .post-navigation .nav-previous a,.search-box i,.tags p a, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle, #sidebox h3, #sidebox .widget_shopping_cart .buttons a:hover, #sidebox .widget_price_filter .price_slider_amount .button:hover, .site-footer .widget_shopping_cart .buttons a:hover, .site-footer .widget_price_filter .price_slider_amount .button:hover, .site-footer form.woocommerce-product-search button:hover, .site-footer form.woocommerce-product-search button:focus, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled[disabled]{';
			$tameer_construction_custom_css .='background-color: '.esc_html($tameer_construction_theme_color).';';
		$tameer_construction_custom_css .='}';
	}
	if($tameer_construction_theme_color != false){
		$tameer_construction_custom_css .='a, .mail i, .call i, .time i, .social-media i:hover, .post-info i, .main-navigation ul ul li a,.main-navigation li li:focus > a,.main-navigation li li:hover > a,#sidebox ul li a:hover,.entry-date a:hover, .entry-author a:hover{';
			$tameer_construction_custom_css .='color: '.esc_html($tameer_construction_theme_color).';';
		$tameer_construction_custom_css .='}';
	}
	if($tameer_construction_theme_color != false){
		$tameer_construction_custom_css .='.site-footer ul li a:hover,.post-info a:hover{';
			$tameer_construction_custom_css .='color: '.esc_html($tameer_construction_theme_color).'!important;';
		$tameer_construction_custom_css .='}';
	}
	if($tameer_construction_theme_color != false){
		$tameer_construction_custom_css .='.main-navigation ul ul li:hover{';
			$tameer_construction_custom_css .='border-left-color: '.esc_html($tameer_construction_theme_color).'!important;';
		$tameer_construction_custom_css .='}';
	}
	if($tameer_construction_theme_color != false){
		$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='border-color: '.esc_html($tameer_construction_theme_color).'!important;';
		$tameer_construction_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/
	$tameer_construction_theme_lay = get_theme_mod( 'tameer_construction_theme_options','Default');
    if($tameer_construction_theme_lay == 'Default'){
		$tameer_construction_custom_css .='body{';
			$tameer_construction_custom_css .='max-width: 100%;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='.page-template-custom-home-page .middle-header{';
			$tameer_construction_custom_css .='width: 97.3%';
		$tameer_construction_custom_css .='}';
	}else if($tameer_construction_theme_lay == 'Wide Layout'){
		$tameer_construction_custom_css .='body{';
			$tameer_construction_custom_css .='width: 100%;padding-right: 15px; padding-left: 15px;margin-right: auto;margin-left: auto;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='.page-template-custom-home-page .middle-header{';
			$tameer_construction_custom_css .='width: 97.7%';
		$tameer_construction_custom_css .='}';
	}else if($tameer_construction_theme_lay == 'Box Layout'){
		$tameer_construction_custom_css .='body{';
			$tameer_construction_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='.search-box i{';
			$tameer_construction_custom_css .=' font-size: 16px; padding: 18px 18px;';
		$tameer_construction_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$tameer_construction_slider_layout = get_theme_mod( 'tameer_construction_slider_opacity_color','0.7');
	if($tameer_construction_slider_layout == '0'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.1'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.1';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.2'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.2';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.3'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.3';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.4'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.4';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.5'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.5';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.6'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.6';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.7'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.7';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.8'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.8';
		$tameer_construction_custom_css .='}';
		}else if($tameer_construction_slider_layout == '0.9'){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='opacity:0.9';
		$tameer_construction_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$tameer_construction_slider_layout = get_theme_mod( 'tameer_construction_slider_content_option','Center');
    if($tameer_construction_slider_layout == 'Left'){
		$tameer_construction_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tameer_construction_custom_css .='text-align:left; left:15%; right:45%;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 767px){
		#slider .readbutton a{';
		$tameer_construction_custom_css .='font-size:11px;';
		$tameer_construction_custom_css .='} }';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		#slider .carousel-caption{';
		$tameer_construction_custom_css .='top:54%;';
		$tameer_construction_custom_css .='}
		#slider .carousel-caption h1{';
		$tameer_construction_custom_css .='font-size:34px;';
		$tameer_construction_custom_css .='} }';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 767px){
		#slider .carousel-caption{';
		$tameer_construction_custom_css .='top:38%;';
		$tameer_construction_custom_css .='} }';

	}else if($tameer_construction_slider_layout == 'Center'){
		$tameer_construction_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tameer_construction_custom_css .='text-align:center; left:20%; right:20%;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		#slider .carousel-caption{';
		$tameer_construction_custom_css .='top:54%;';
		$tameer_construction_custom_css .='}
		#slider .carousel-caption h1{';
		$tameer_construction_custom_css .='font-size:34px;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_slider_layout == 'Right'){
		$tameer_construction_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tameer_construction_custom_css .='text-align:right; left:45%; right:15%;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 767px){
		#slider .readbutton a{';
		$tameer_construction_custom_css .='font-size:11px;';
		$tameer_construction_custom_css .='} }';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		#slider .carousel-caption{';
		$tameer_construction_custom_css .='top:48%;';
		$tameer_construction_custom_css .='}
		#slider .carousel-caption h1{';
		$tameer_construction_custom_css .='font-size:34px;';
		$tameer_construction_custom_css .='} }';
		$tameer_construction_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 767px){
		#slider .carousel-caption{';
		$tameer_construction_custom_css .='top:38%;';
		$tameer_construction_custom_css .='} }';
	}

	/*------------------------------ Button Settings option-----------------------*/
	$tameer_construction_top_bottom_padding = get_theme_mod('tameer_construction_top_bottom_padding');
	$tameer_construction_left_right_padding = get_theme_mod('tameer_construction_left_right_padding');
	if($tameer_construction_top_bottom_padding != false || $tameer_construction_left_right_padding != false){
		$tameer_construction_custom_css .='.post-link a, #slider .readbutton a, .form-submit input[type="submit"], #about .aboutbtn a{';
			$tameer_construction_custom_css .='padding-top: '.esc_html($tameer_construction_top_bottom_padding).'px; padding-bottom: '.esc_html($tameer_construction_top_bottom_padding).'px; padding-left: '.esc_html($tameer_construction_left_right_padding).'px; padding-right: '.esc_html($tameer_construction_left_right_padding).'px; display:inline-block;';
		$tameer_construction_custom_css .='}';
	}

	$tameer_construction_border_radius = get_theme_mod('tameer_construction_border_radius');
		$tameer_construction_custom_css .='.post-link a,#slider .readbutton a, .form-submit input[type="submit"], #about .aboutbtn a{';
			$tameer_construction_custom_css .='border-radius: '.esc_html($tameer_construction_border_radius).'px;';
		$tameer_construction_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/
	$tameer_construction_theme_lay = get_theme_mod( 'tameer_construction_blog_post_layout','Default');
    if($tameer_construction_theme_lay == 'Default'){
		$tameer_construction_custom_css .='.blogger{';
			$tameer_construction_custom_css .='';
		$tameer_construction_custom_css .='}';
	}else if($tameer_construction_theme_lay == 'Center'){
		$tameer_construction_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$tameer_construction_custom_css .='text-align:center;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='.post-info{';
			$tameer_construction_custom_css .='margin-top:10px;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='.blogger .post-link{';
			$tameer_construction_custom_css .='margin-top:25px;';
		$tameer_construction_custom_css .='}';
	}else if($tameer_construction_theme_lay == 'Image and Content'){
		$tameer_construction_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$tameer_construction_custom_css .='text-align:Left;';
		$tameer_construction_custom_css .='}';
		$tameer_construction_custom_css .='.blogger .post-link{';
			$tameer_construction_custom_css .='text-align:right;';
		$tameer_construction_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$tameer_construction_loader_color_setting = get_theme_mod('tameer_construction_loader_color_setting');

	if($tameer_construction_loader_color_setting != false){
		$tameer_construction_custom_css .=' .circle .inner{';
			$tameer_construction_custom_css .='border-color: '.esc_html($tameer_construction_loader_color_setting).';';
		$tameer_construction_custom_css .='} ';
	}

	$tameer_construction_loader_background_color = get_theme_mod('tameer_construction_loader_background_color');

	if($tameer_construction_loader_background_color != false){
		$tameer_construction_custom_css .=' #pre-loader{';
			$tameer_construction_custom_css .='background-color: '.esc_html($tameer_construction_loader_background_color).';';
		$tameer_construction_custom_css .='} ';
	}

	$tameer_construction_theme_lay = get_theme_mod( 'tameer_construction_preloader_types','Default');
    if($tameer_construction_theme_lay == 'Default'){
		$tameer_construction_custom_css .='{';
			$tameer_construction_custom_css .='';
		$tameer_construction_custom_css .='}';
	}elseif($tameer_construction_theme_lay == 'Circle'){
		$tameer_construction_custom_css .='.circle .inner{';
			$tameer_construction_custom_css .='width:unset;';
		$tameer_construction_custom_css .='}';
	}elseif($tameer_construction_theme_lay == 'Two Circle'){
		$tameer_construction_custom_css .='.circle .inner{';
			$tameer_construction_custom_css .='width:80%;
    border-right: 5px;';
		$tameer_construction_custom_css .='}';
	}

	// Responsive Media
	$tameer_construction_sidebar = get_theme_mod( 'tameer_construction_enable_disable_sidebar',true);
    if($tameer_construction_sidebar == true){
    	$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='#sidebox{';
			$tameer_construction_custom_css .='display:block;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_sidebar == false){
		$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='#sidebox{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} }';
	}

	$tameer_construction_stickyheader = get_theme_mod( 'tameer_construction_enable_disable_topbar',true);
	if($tameer_construction_stickyheader == true && get_theme_mod( 'tameer_construction_show_hide_topbar', true) == false){
    	$tameer_construction_custom_css .='.custom-header{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} ';
	}
    if($tameer_construction_stickyheader == true){
    	$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='.custom-header{';
			$tameer_construction_custom_css .='display:block;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_stickyheader == false){
		$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='.custom-header{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} }';
	}

	$tameer_construction_stickyheader = get_theme_mod( 'tameer_construction_enable_disable_fixed_header',false);
	if($tameer_construction_stickyheader == true && get_theme_mod( 'tameer_construction_fixed_header', false) == false){
    	$tameer_construction_custom_css .='.fixed-header{';
			$tameer_construction_custom_css .='position:static;';
		$tameer_construction_custom_css .='} ';
	}
    if($tameer_construction_stickyheader == true){
    	$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='.fixed-header{';
			$tameer_construction_custom_css .='position:fixed;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_stickyheader == false){
		$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='.fixed-header{';
			$tameer_construction_custom_css .='position:static;';
		$tameer_construction_custom_css .='} }';
	}

	$tameer_construction_sliderbutton = get_theme_mod( 'tameer_construction_enable_disable_slider', false);
	if($tameer_construction_sliderbutton == true && get_theme_mod( 'tameer_construction_slider_arrows', false) == false){
    	$tameer_construction_custom_css .='#slider{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} ';
	}
    if($tameer_construction_sliderbutton == true){
    	$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='#slider{';
			$tameer_construction_custom_css .='display:block;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_sliderbutton == false){
		$tameer_construction_custom_css .='@media screen and (max-width:575px){';
		$tameer_construction_custom_css .='#slider{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} }';
	}

	$tameer_construction_sliderbutton = get_theme_mod( 'tameer_construction_show_hide_slider_button',true);
	if($tameer_construction_sliderbutton == true && get_theme_mod( 'tameer_construction_slider_button', true) == false){
    	$tameer_construction_custom_css .='#slider .readbutton{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} ';
	}
    if($tameer_construction_sliderbutton == true){
    	$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='#slider .readbutton{';
			$tameer_construction_custom_css .='display:block;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_sliderbutton == false){
		$tameer_construction_custom_css .='@media screen and (max-width:575px){';
		$tameer_construction_custom_css .='#slider .readbutton{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} }';
	}

	$tameer_construction_sliderbutton = get_theme_mod( 'tameer_construction_enable_disable_scrolltop',true);
	if($tameer_construction_sliderbutton == true && get_theme_mod( 'tameer_construction_hide_show_scroll', true) == false){
    	$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} ';
	}
    if($tameer_construction_sliderbutton == true){
    	$tameer_construction_custom_css .='@media screen and (max-width:575px) {';
		$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='display:block;';
		$tameer_construction_custom_css .='} }';
	}else if($tameer_construction_sliderbutton == false){
		$tameer_construction_custom_css .='@media screen and (max-width:575px){';
		$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='display:none;';
		$tameer_construction_custom_css .='} }';
	}

	// css
	$tameer_construction_show_slider = get_theme_mod( 'tameer_construction_slider_arrows', false);
	if($tameer_construction_show_slider == false){
		$tameer_construction_custom_css .='.page-template-home-custom #masthead .main-header{';
			$tameer_construction_custom_css .='position:static; background: #f1f1f1;
    padding: 15px 0;';
		$tameer_construction_custom_css .='}';
	}

	$tameer_construction_show_header = get_theme_mod( 'tameer_construction_show_hide_topbar', true);
	if($tameer_construction_show_header == false){
		$tameer_construction_custom_css .='.header-menu{';
			$tameer_construction_custom_css .='margin-top: 2em;';
		$tameer_construction_custom_css .='}';
	}

	// Copyright top-bottom padding setting 
	$tameer_construction_copyright_top_bottom_padding = get_theme_mod('tameer_construction_copyright_top_bottom_padding');
	if($tameer_construction_copyright_top_bottom_padding != false){
		$tameer_construction_custom_css .='.site-info{';
			$tameer_construction_custom_css .='padding-top: '.esc_html($tameer_construction_copyright_top_bottom_padding).'px; padding-bottom: '.esc_html($tameer_construction_copyright_top_bottom_padding).'px;';
		$tameer_construction_custom_css .='}';
	}

	// Copyright top-bottom padding setting 
	$tameer_construction_copyright_top_bottom_padding = get_theme_mod('tameer_construction_copyright_top_bottom_padding');
	if($tameer_construction_copyright_top_bottom_padding != false){
		$tameer_construction_custom_css .='.copyright{';
			$tameer_construction_custom_css .='padding-top: '.esc_html($tameer_construction_copyright_top_bottom_padding).'px; padding-bottom: '.esc_html($tameer_construction_copyright_top_bottom_padding).'px;';
		$tameer_construction_custom_css .='}';
	}

	// Copyright top-bottom padding setting 
	$tameer_construction_copyright_top_bottom_padding = get_theme_mod('tameer_construction_copyright_top_bottom_padding');
	if($tameer_construction_copyright_top_bottom_padding != false){
		$tameer_construction_custom_css .='.site-info{';
			$tameer_construction_custom_css .='padding-top: '.esc_html($tameer_construction_copyright_top_bottom_padding).'px; padding-bottom: '.esc_html($tameer_construction_copyright_top_bottom_padding).'px;';
		$tameer_construction_custom_css .='}';
	}

	// scroll to top setting
	$tameer_construction_scroll_border_radius = get_theme_mod('tameer_construction_scroll_border_radius');
	if($tameer_construction_scroll_border_radius != false){
		$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='border-radius: '.esc_html($tameer_construction_scroll_border_radius).'px;';
		$tameer_construction_custom_css .='}';
	}

	$tameer_construction_scroll_top_fontsize = get_theme_mod('tameer_construction_scroll_top_fontsize');
	if($tameer_construction_scroll_top_fontsize != false){
		$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='font-size: '.esc_html($tameer_construction_scroll_top_fontsize).'px;';
		$tameer_construction_custom_css .='}';
	}

	$tameer_construction_scroll_top_bottom_padding = get_theme_mod('tameer_construction_scroll_top_bottom_padding');
	$tameer_construction_scroll_left_right_padding = get_theme_mod('tameer_construction_scroll_left_right_padding');
	if($tameer_construction_scroll_top_bottom_padding != false || $tameer_construction_scroll_left_right_padding != false){
		$tameer_construction_custom_css .='.scrollup i{';
			$tameer_construction_custom_css .='padding-top: '.esc_html($tameer_construction_scroll_top_bottom_padding).'px; padding-bottom: '.esc_html($tameer_construction_scroll_top_bottom_padding).'px; padding-left: '.esc_html($tameer_construction_scroll_left_right_padding).'px; padding-right: '.esc_html($tameer_construction_scroll_left_right_padding).'px;';
		$tameer_construction_custom_css .='}';
	}

	// Slider Height 
	$tameer_construction_slider_height_option = get_theme_mod('tameer_construction_slider_height_option');
	if($tameer_construction_slider_height_option != false){
		$tameer_construction_custom_css .='#slider img{';
			$tameer_construction_custom_css .='height: '.esc_html($tameer_construction_slider_height_option).'px;';
		$tameer_construction_custom_css .='}';
	}





