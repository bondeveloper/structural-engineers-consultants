<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu <?php if( get_theme_mod( 'tameer_construction_fixed_header', false) != '' || get_theme_mod( 'tameer_construction_enable_disable_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
	<div class="row m-0">
		<div class="col-lg-10 offset-lg-1 col-md-10">
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tameer-construction' ); ?>">
				<button role="tab" class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
					<?php
						esc_html_e( 'Menu', 'tameer-construction' );
					?>
				</button>

				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
				) ); ?>				
			</nav>
		</div>
		<div class="col-lg-1 col-md-2">
			<div class="search-box">
				<a href="#" onclick="tameer_construction_search_open()" ><i class="fas fa-search"></i>
		     		<span class="screen-reader-text"><?php esc_html_e( 'Search','tameer-construction' );?></span>
		     	</a>
		    </div>
		</div>
	</div>
	<div class="serach_outer">
	    <div class="serach_inner">
	      <?php get_search_form(); ?>
	    </div>
	    <a href="#slider" onclick="tameer_construction_search_close()" class="closepop">X<span class="screen-reader-text"><?php esc_html_e( 'serach-outer','tameer-construction' );?></span></a>
	</div>
</div>