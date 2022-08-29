<?php get_header(); ?>
											
			<?php if(is_active_sidebar('headline-content-area')):?>
			<div class="container-fluid">
				<div class="container animate-box">
					<div class="row">			
						<?php dynamic_sidebar('headline-content-area');?>
					</div>
				</div>
			</div>
			<?php endif;?>

			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // are we on page one?
				if(1 == $paged): //only show on first page
			?>

			<?php if ( (alith_get_option('switch-featured'))==1 & (alith_get_option('home_featured_position') =='big')): ?>
				<div class="container-fluid">
					<div class="container">
					<?php if (alith_get_option('home_featured_layout')!='grid'): ?>	
						 <div class="row">
					<?php endif; ?> 				
						<?php
							if (alith_get_option('home_featured_layout')!='') { 
								$alith_featured_style		= alith_get_option('home_featured_layout');
							} else {$alith_featured_style	= "slider"; }
							get_template_part( 'tmpls/featured/featured', $alith_featured_style );							
							wp_reset_postdata();
						?>
						</div> 
					<?php if (alith_get_option('home_featured_layout')=='grid'): ?> </div> <?php endif; ?>
				</div>
			<?php endif; ?>

			<?php endif; ?>

			<div class="container-fluid">
				<div class="container">
					<div class="primary margin-15">
					<div class="row">
						<?php 				
						if (alith_get_option('homepage_sidebar_opt')!='') { 
							$homepage_sidebar		= alith_get_option('homepage_sidebar_opt');
						} else {$homepage_sidebar	= "sidebar_right"; }	
							get_template_part( 'tmpls/homepage/homepage', $homepage_sidebar );
						?>
					</div>
					</div> <!--.primary-->
				</div>
			</div>
				
<?php get_footer();?>		