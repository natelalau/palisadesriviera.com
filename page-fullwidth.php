<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera page-fullwidth
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

get_header(); ?>
<div id="content-full">
	<div id="content" class="hfeed">
		<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
		
		<div class="post">
		<h1 class="entry-title"><?php the_title(); ?></h1>


			<div class="entry">
			<?php the_content(); ?>

				<p class="postmetadata">
				<?php edit_post_link( 'Edit', ' &#124; ', '' ); ?>
				</p>

			</div>

		</div>
		
	<?php endwhile; ?>
	
	<?php endif; ?>
	</div><!-- end #content -->
	
</div><!-- end #content-full -->

<?php get_footer(); ?>
