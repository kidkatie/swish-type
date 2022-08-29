<?php
/**
 * The template for displaying pages 
 */
get_header(); ?>

<?php if(alith_get_option('page_breadcrumb')): ?>
<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="post-header">
				<div class="bread">
					<?php alith_theme_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="container">
		<div class="primary margin-15">
			<div class="row">
				<?php 						
					if (alith_get_option('page_sidebar_opt')!='') { 
						$page_sidebar		= alith_get_option('page_sidebar_opt');
					} else {$page_sidebar	= "sidebar_right"; }
					
					get_template_part( 'tmpls/page/page', $page_sidebar );
				?>
			</div>
		</div> <!--.primary-->					
	</div>
</div>

<?php get_footer(); ?>