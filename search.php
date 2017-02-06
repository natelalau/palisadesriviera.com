<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera search
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<?php get_header(); ?>
<div id="content-sidebar">
	<div id="content" class="hfeed">
	<h1 class="archive-title">Search Results for &#8216;<?php printf( get_search_query() ); ?>&#8217;</h1>
	<?php get_search_form(); ?>
		<?php get_template_part( 'content-loop' ); ?>
		<div class="navigation">
			<?php posts_nav_link(); ?>
		</div>
	<?php endif; ?>
	</div><!-- end #content -->
<?php get_sidebar(); ?>
</div><!-- end #content-sidebar -->
<?php get_footer(); ?>
