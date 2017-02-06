<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
		<div class="post">
		<h2 class="archive-subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
				<p class="postmetadata">
				<?php esc_html_e( 'Filed under&#58;' ); ?> <?php the_category( ', ' ) ?> <?php esc_html_e( 'by' ); ?> <?php  the_author(); ?><br />
				<?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?> <?php edit_post_link( 'Edit', ' &#124; ', '' ); ?>
				</p>
			</div>
		</div>
	<?php endwhile; ?>
