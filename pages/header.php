<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head();?>
</head>
<body <?php body_class();?>> 
	<?php if (alith_get_option('page_loader') ): ?> 
 	<div class="spinner-cover">
		<div class="spinner-inner">
			<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
			</div>
		</div>
	</div> 
	<?php endif; ?>
	<div class="dark-mark"></div>
	<div id="wrapper" class="<?php if (alith_get_option('boxed_switch') ) {echo "boxed";}  ?>">
		<?php if (alith_get_option('switch-display-offcanvas') ) {get_sidebar('offcanvas');}  ?>
		<div id="page-content-wrapper">
			<?php if (alith_get_option('switch-display-topbar') ): ?> 
			<div class="container-fluid">
				<div class="container">
					<div class="top_bar margin-15">
						<div class="row">
							<div class="col-md-6 col-sm-12 time">
								<?php if (alith_get_option('switch-display-offcanvas') ): 
									if(is_active_sidebar('sidebar-offcanvas-area')):
									?> 
								<div class="off-canvas-toggle" id="off-canvas-toggle">
									<div class="off-canvas-span-cover"><span></span></div>
									<p class="sidebar-open"><?php esc_html_e( 'MORE', 'hewo')?></p>
								</div>
								<?php endif; 
									endif; ?>
								<?php if (alith_get_option('switch-display-date-time') ): ?>
								<i class="fa fa-clock-o"></i><span class="top-datetime"><?php echo date(get_option('date_format')); ?></span>
								<?php endif; ?>              
							</div>
							<div class="col-md-6 col-sm-12 social">
								<?php 
									$new_tab = alith_get_option( 'social_newtab' );
									$alith_social_profile = alith_get_social_profile();
									if (alith_get_option('switch-display-social-network') ):
										if ( ! empty( $alith_social_profile ) ) : 
								?>
										<div class="topbar-social-icon">
											<?php echo alith_social_network_render( $alith_social_profile, $new_tab ); ?>
										</div>
								<?php 
										endif;  
									endif;
								?>

								<?php if (alith_get_option('switch-display-search-box') ): ?>
								<div class="top-search">
									<i class="fa fa-search"></i><span><?php esc_html_e( 'SEARCH', 'hewo')?></span>
								</div>
								<div class="top-search-form">
									<?php get_search_form(); ?>									
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div> <!--End Top Bar-->
			<?php endif; ?>

			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 header">
							<?php if (alith_get_option('logo-type') == 'logo-text'): 
								$logo_text = !empty(alith_get_option('logo-type-text')) ? alith_get_option('logo-type-text') : 'HEWO';
								?>								
								<h1 class="logo-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php echo esc_attr($logo_text);?></a></h1>				
								<?php else: 
									
								?>																			
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><img src="<?php echo esc_url(alith_get_option('logo-image')['url']);?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
							<?php endif; ?>	
							<?php if (!empty(alith_get_option('slogan-text'))): ?>						
							<p class="tagline"><?php echo esc_attr(empty(alith_get_option('slogan-text')) ? "" :  alith_get_option('slogan-text'));?></p>
							<?php endif; ?>	
						</div>
					</div>
				</div>
			</div> <!--End Logo-->
			<div class="main-nav section_margin <?php if (alith_get_option('switch-smart-navigation')) {echo "main-nav-smart";} ?>">
				
				<div class="container-fluid">					
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-12 main_nav_cover" id="nav">

								<div id="nav-fixed">	
									<div class="off-canvas-toggle hidden" id="off-canvas-toggle">
										<div class="off-canvas-span-cover"><span></span></div>
									</div>
									<?php
										if (has_nav_menu('main-menu')) {
											wp_nav_menu( array(
												'theme_location' => 'main-menu',
												'menu_id'		  => 'main-menu'
											 ) );
										} else {
											echo esc_html__( 'Go to Appearance > Menu to set Main Menu','hewo');
										}
										
									?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!--End Main Navigation-->

