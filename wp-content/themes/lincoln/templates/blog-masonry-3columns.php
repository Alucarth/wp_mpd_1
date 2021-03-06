<?php
/**
 * The blog template file.
 *
 * @package Lincoln
 * @author  LunarTheme
 * @link	http://www.lunartheme.com
 * Template Name: Blog masonry 3 Columns
 */

// Get theme options
global $smof_data, $wp_query;
$blog_style = 'masonry';
$classes = '';
if ($smof_data['pagination-type'] == 'pagination_lite') {
	$classes = 'pagination_lite';
}

$page_select_categories         = ( function_exists( 'get_field' ) ) ? get_field( 'page_select_categories', $id ) : '';

// Get category by id
$post_of_cats = '';
if ( is_numeric( $page_select_categories ) ) {
	$post_of_cats = $page_select_categories;
} else {
	$i = 0;
	if ( is_array( $page_select_categories ) && count( $page_select_categories ) > 0 ) {
		foreach( $page_select_categories as $key => $val ) {
			if ( $i == count( $page_select_categories ) ) {
				$post_of_cats .= $val;
			} else {
				$post_of_cats .= ',' . $val;
			}
			$i++;
		}
	}
}

// Get blog layout
$blog_layout = $smof_data['blog-layout'];

get_header(); 

wp_enqueue_script( 'jquery-isotope' );
wp_enqueue_script( 'k2t-masonry' );
?>

	<div class="k2t-content right-sidebar b-masonry <?php echo esc_attr($classes);?>">

		<div class="k2t-wrap">

			<main class="k2t-blog" role="main">
				
				<div class="masonry-layout column-3">
					<div class="grid-sizer"></div>
					<?php
					$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
					$args = array(
						'post_type'      => 'post',
						'posts_per_page' => get_option('posts_per_page '),
						'paged'			 => $paged,
						'cat'			 => $post_of_cats,
					);
					$wp_query = new WP_query( $args );
					while ( $wp_query->have_posts() ) : $wp_query->the_post();
						get_template_part( 'templates/blog/content', 'masonry' );
					endwhile;
					?>
				</div>
				<?php 
					include_once get_template_directory() . '/templates/navigation.php';
					wp_reset_postdata();
				?>
			</main><!-- .k2t-main -->

			<?php get_sidebar(); ?>

		</div><!-- .k2t-wrap -->
	</div><!-- .k2t-content -->

<?php get_footer(); ?>
