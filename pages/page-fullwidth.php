<?php
/**
 * Template Name: Full width
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
					get_template_part( 'tmpls/page/page', 'sidebar_none' );
				?>
			</div>
		</div> <!--.primary-->					
	</div>
</div>

<?php get_footer(); ?>