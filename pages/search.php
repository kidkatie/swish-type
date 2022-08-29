<?php get_header(); ?>
<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="archive-header">
				<div class="archive-title"><h2><?php printf( __( 'Search Results for: %s', 'hewo' ), get_search_query() ); ?></div>
				<div class="bread">
					<?php
						$search_query = new WP_Query( 's='.$s.'&showposts=-1' );
						$search_count = $search_query->post_count;
						printf( __('We found <strong>%2$s</strong> articles for you.', 'hewo'), '', $search_count );
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<div class="primary margin-15">
			<div class="row">
				<div class="col-md-8">
					<?php get_template_part( 'tmpls/loops/loop', 'list' ); ?>
				</div>
				<aside class="col-md-4 <?php echo alith_get_option('archive_sidebar_opt'); ?>">
					<div class="theiaStickySidebar">
						<?php get_sidebar() ?>						
					</div>
				</aside> <!--sidebar-->
			</div>
		</div>
	</div>
</div>

<?php get_footer();