<?php get_header(); ?>
<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="archive-header">
				<div class="post-author-info">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="meta_author_avatar"><?php echo get_avatar( get_the_author_meta('user_email'), '100'); ?></a>
					<div class="archive-title"><h2><?php printf( the_author_meta('display_name') );	?></h2></div>
					<?php					
						// author discriptions
						echo '<p>'. get_the_author_meta( 'description' ) . '</p>';			 
						// author site
						if ( get_the_author_meta( 'user_url' ) ) : printf( __('<div class="post_meta"><span><a target="_blank" href="%1$s">Visit Author Site</a></span></div>', 'hewo'),
								get_the_author_meta( 'user_url' ), get_the_author() );
						endif;
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

<?php get_footer(); ?>