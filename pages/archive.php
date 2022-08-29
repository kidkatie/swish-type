<?php get_header(); ?>
<?php if (alith_get_option('archive_header')):  
	get_template_part( 'tmpls/archive/archive', 'header' );
 endif; ?>

<div class="container-fluid">
	<div class="container">
		<div class="primary margin-15">
		<div class="row">
			<?php 				
			if (alith_get_option('archive_sidebar_opt')!='') { 
				$archive_sidebar		= alith_get_option('archive_sidebar_opt');
			} else {$archive_sidebar	= "sidebar_right"; }	
				get_template_part( 'tmpls/archive/archive', $archive_sidebar );
			?>
		</div>
		</div> <!--.primary-->
	</div>
</div>
 
<?php get_footer(); ?>