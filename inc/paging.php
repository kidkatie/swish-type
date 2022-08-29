<?php 
global $wp_query;

$big = 999999999;
$pagenum_link = str_replace( $big, '%#%', get_pagenum_link( $big ));
$pagenum_link = str_replace( '#038;','&',  $pagenum_link);

$args = array(
		'base'               => $pagenum_link,
		'format'             => '?page=%#%',
		'total'              => $wp_query->max_num_pages,
		'current'            => max(1,get_query_var('paged')),
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 2,
		'prev_next'          => true,
		'prev_text'          => esc_html__('PREV', 'hewo'),
		'next_text'          => esc_html__('NEXT', 'hewo'),
		'type'               => 'list',
		'after_page_number'  => '.'
		);	
?>

<div class="site-pagination clr">
	<?php echo paginate_links( $args );?>
</div>

<?php
 	$defaults = array(
		'before'           => '<p>' . esc_html__( 'Pages:', 'hewo' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => esc_html__( 'Next page', 'hewo' ),
		'previouspagelink' => esc_html__( 'Previous page', 'hewo' ),
		'pagelink'         => '%',
		'echo'             => 0
	); 
    wp_link_pages( $defaults );
?>