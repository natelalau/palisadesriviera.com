<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

get_header(); ?>


<div id="content-sidebar">
	<div id="content" class="hfeed">




<style>
.sitemap-section {
	margin: 20px 0;
	padding-bottom: 20px;
	border-bottom: 1px solid #ddd;
	}
.sitemap-section:last-child {
	border:none;
	}
.sitemap-list {
	line-height:1.5em;
	margin: 0;
	padding: 0;
	}

.sitemap-list li, .sitemap-list li a {
	-ms-word-wrap: break-word !important;
	word-wrap: break-word !important;
	}

.sitemap-list li {
	width: 25%;
	float:left;
	display:inline;
	}

/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {
	
.sitemap-list li {
	width: 50%;
	float:left;
	display:inline;
	}
	}

.sitemap-list li ul {
	margin: 0;
	padding: 0;
	display:inline-block;
	}
.sitemap-list li ul li {
	padding-left: 30px;
	width: 100%;
	list-style-type: circle !important;
	font-size: 10px;
	}
</style>

<div class="content">
	<div class="container">
		<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-sm-12">
				<h1><i class="fa fa-sitemap fa-fw"></i> <?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row sitemap-section">
				<div class="col-sm-12">
<?php $count_pages = wp_count_posts( 'page' ); ?>
<?php
$count_pages = wp_count_posts( 'page' );
$published_pages = $count_pages->publish;
?>
<h2 id="pages">Pages (<?php echo esc_html(); ?>)</h2>

<ul class="sitemap-list sitemap-pages">
<?php
// Add pages you'd like to exclude in the exclude here.
wp_list_pages(
	array(
	'authors'      => '',
	'child_of'     => 0,
	'date_format'  => get_option( 'date_format' ),
	'depth'        => 0,
	'echo'         => 1,
	'exclude'      => '',
	'include'      => '',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => '',
	'sort_column'  => 'menu_order, post_title',
	'sort_order'   => '',
	'title_li'     => '',
	'walker'       => '',
	)
);
?>
</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8">
					<h2><i class="fa fa-book fa-fw"></i> BLOG</h2>
				</div>
				<div class="col-sm-4 text-right">
				<h2><a href="<?php echo bloginfo( 'rss2_url' ); ?>" ><i class="fa fa-rss-square fa-fw"></i> Subscribe</a></h2>
				</div>
			</div>

			<div class="row sitemap-section">

				<div class="col-sm-4">
					<h4>Most Recent Posts</h4>
					<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
					</div>
					<div class="col-sm-4">
						<h4>Most Popular Posts</h4>
						<?php
						if ( class_exists( 'WDS_JetPack_Popular_Posts' ) ) {
								$popular_post_object = new WDS_JetPack_Popular_Posts( array( 'count' => 5, 'days' => 2, 'transient_affix' => '_mypp' ) );
								$popular_post_results = $popular_post_object->get_posts();
							if ( ! empty( $popular_post_results ) ) {
									$output = '<ol>';
								foreach ( $popular_post_results as $popular_post ) {
										$output .= '<li class="popular-post-' . $popular_post['post_id'] . '"><a href="' . $popular_post['permalink'] . '">' . $popular_post['title'] . '</a></li>';
								}
										$output .= '</ol>';
										echo esc_html();
							}
						}
										?>
										</div>
										<div class="col-sm-4">
											<h4>Featured Posts</h4>
											<!-- Found in our template file -->
											<ul>
												<?php
													$featured_content = haverkate_get_featured_content();
												if ( haverkate_get_featured_content( 5 ) ) : ?>
<?php foreach ( $featured_content as $post ) : setup_postdata( $post ); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>

<?php endif; ?>
</div>


</div>

<div class="row sitemap-section">

<div class="col-sm-12">
<h4 id="authors">Posts by Author</h4>
<ul class="sitemap-list sitemap-author">
<?php
// Maybe we can do small images with gravatars of the author.
wp_list_authors(
	array(
	'orderby'       => 'name',
	'order'         => 'ASC',
	'number'        => null,
	'optioncount'   => true,
	'exclude_admin' => false,
	'show_fullname' => true,
	'hide_empty'    => true,
	'echo'          => true,
	'feed'          => '<i class="fa fa-rss"></i>',
	'feed_image'    => '',
	'feed_type'     => '',
	'style'         => 'list',
	'html'          => true,
	'exclude'       => '',
	'include'       => '',
	)
);
?>
</ul>

</div>
</div>


<div class="row sitemap-section">
<div class="col-sm-12">

<h4>Posts by Year</h4>
<ul class="sitemap-list sitemap-year">
	<?php wp_get_archives(
		array(
		'type'            => 'yearly',
		'limit'           => '',
		'format'          => 'html',
		'before'          => '',
		'after'           => '',
		'show_post_count' => true,
		'echo'            => 1,
		'order'           => 'DESC',
		)
	); ?>
</ul>

</div>
</div>

<div class="row sitemap-section">
<div class="col-sm-12">

<h4>Posts by Month</h4>
<ul class="sitemap-list sitemap-monthly">
<?php wp_get_archives(
	array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html',
	'before'          => '',
	'after'           => '',
	'show_post_count' => true,
	'echo'            => 1,
	'order'           => 'DESC',
	)
); ?>
</ul>

</div>
</div>

<div class="row sitemap-section">
<div class="col-sm-12">

<h4>Posts by Week</h4>
<ul class="sitemap-list sitemap-weekly">
	<?php wp_get_archives(
		array(
		'type'            => 'weekly',
		'limit'           => '',
		'format'          => 'html',
		'before'          => '',
		'after'           => '',
		'show_post_count' => true,
		'echo'            => 1,
		'order'           => 'DESC',
		)
	); ?>
</ul>


</div>
</div>

<div class="row sitemap-section">
<div class="col-sm-12">

<h4>Posts by Day</h4>
<ul class="sitemap-list sitemap-daily">
	<?php wp_get_archives(
		array(
		'type'            => 'daily',
		'limit'           => '',
		'format'          => 'html',
		'before'          => '',
		'after'           => '',
		'show_post_count' => true,
		'echo'            => 1,
		'order'           => 'DESC',
		)
	); ?>
</ul>

</div>
</div>

<div class="row sitemap-section">
<div class="col-sm-12">
<h4>Posts by Categories</h4>

<ul class="sitemap-list sitemap-categories">
<?php
$args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 1,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '<i class="fa fa-rss"></i>',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => __( '' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 1,
	'taxonomy'           => 'category',
	'walker'             => null,
	);
wp_list_categories( $args );
?>
</ul>
</div>
</div>

<div class="row sitemap-section">
	<div class="col-sm-12">
		<h4>Posts by Tags</h4>
		<?php wp_tag_cloud(); ?>
	</div>
</div>



<div class="row sitemap-section">
<div class="col-sm-12">

<?php
$count_posts = wp_count_posts();
$published_posts = $count_posts->publish;
?>
<h4>All Posts (<?php echo esc_html(); ?>)</h4>


<ul class="sitemap-list sitemap-posts">
	<?php wp_get_archives(
		array(
		'type'            => 'alpha', // Alpha or postbypost.
		'limit'           => '',
		'format'          => 'html',
		'before'          => '',
		'after'           => '',
		'show_post_count' => true,
		'echo'            => 1,
		'order'           => 'DESC',
		)
	); ?>
</ul>

</div>
</div>



<div class="row sitemap-section">
<div class="col-sm-12">

<div class="well well-search">
<p>Still looking for something? Feel free to search the site:</p>
<?php get_search_form( ); ?>
</div>


<br />
<p class="text-muted" style="font-size:10px;">Looking for our <a href="/sitemap_index.xml">XML Sitemap</a>?</p>

</div>
</div>





</div>
</div>


</div><!-- end #content -->
</div>

<?php get_footer(); ?>
