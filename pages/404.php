<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>
 
<div class="container-fluid">
	<div class="container">
		<div class="primary margin-15">
		<div class="row">
			<div class="col-md-12">
				<article class="section_margin">
					<div class="post-content">
						<div class="single-content animate-box">
							<div class="page_404 animate-box">
								<h1><?php esc_html_e('404', 'hewo'); ?></h1>
								<h2><?php esc_html_e('Page Not Found', 'hewo'); ?></h2>

								<p><?php esc_html_e('The page requested could not be found. This could a spelling error in the URL or a removed page.', 'hewo'); ?> </p>
								<ul class="list-inline text-center nav-404">
									<li class="list-inline-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home Page', 'hewo'); ?></a></li>
									<li class="list-inline-item"><a class="show-404-search-form"><?php esc_html_e('Search', 'hewo'); ?></a></li>
								</ul>
								<div class="search-form-404">
									<?php get_search_form(); ?>	
								</div>								
							</div>
						</div> <!--single content-->
				</article>
			</div>
		</div>
		</div> <!--.primary-->
		
	</div>
</div>

<?php get_footer(); ?>
