<?php get_header(); ?>

<?php if(alith_get_option('single_breadcrumb')): ?>
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
					if (alith_get_option('single_sidebar_opt')!='') { 
						$single_sidebar		= alith_get_option('single_sidebar_opt');
					} else {$single_sidebar	= "sidebar_right"; }					
					get_template_part( 'tmpls/post/content', $single_sidebar );
				?>
			</div>
		</div>
	</div>
</div>
 
<?php get_footer(); ?>