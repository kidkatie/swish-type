			<?php if (alith_get_option('switch_bottom_column')): ?>
			<div class="container-fluid">
				<div class="container animate-box">
					<div class="bottom margin-15">
						<div class="row">            
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">								
								<?php if(is_active_sidebar('footer1-area')):?>
									<?php dynamic_sidebar('footer1-area');?>		
								<?php endif;?>
							</div>

							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">								
								<?php if(is_active_sidebar('footer2-area')):?>
									<?php dynamic_sidebar('footer2-area');?>		
								<?php endif;?>
							</div>

							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">								
								<?php if(is_active_sidebar('footer3-area')):?>
									<?php dynamic_sidebar('footer3-area');?>		
								<?php endif;?>
							</div>

							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">								
								<?php if(is_active_sidebar('footer4-area')):?>
									<?php dynamic_sidebar('footer4-area');?>		
								<?php endif;?>
							</div>
						</div> <!--.row-->
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="container-fluid alith_footer_right_reserved">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 bottom-logo">
							<?php if (alith_get_option('footer-logo-type') == 'logo-text'): ?>								
								<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php echo esc_attr(alith_get_option('footer-logo-type-text'));?></a></h1>				
								<?php else: ?>																			
								<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><img src="<?php echo esc_url(alith_get_option('footer-logo-image')['url']);?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></div>
							<?php endif; ?>

							<?php 
							if (alith_get_option('switch_footer_social')):
							
								$new_tab = alith_get_option( 'social_newtab' );
								$alith_social_profile = alith_get_social_profile();
								if (alith_get_option('switch-display-social-network') ):
									if ( ! empty( $alith_social_profile ) ) : 
							?>
									<div class="tagline social">
										<?php echo alith_social_network_render( $alith_social_profile, $new_tab ); ?>
									</div>
							<?php 
									endif;  
								endif;
							endif; 
							?>

						</div>
						<?php if (alith_get_option('show_copyright_text')): ?>
						<div class="col-12 col-md-12 coppyright"> 
							<?php echo alith_get_option('copyright-text');?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if (alith_get_option('switch_footer-back-to-top')): ?>
			<div class="gototop js-top">
				<a href="#" class="js-gotop"><span><?php esc_html_e('Take Me Top', 'hewo');?></span></a>
			</div>
			<?php endif; ?>
		</div> <!--page-content-wrapper-->		
	</div> <!--#wrapper-->

<?php wp_footer();?>
	
</body>
</html>