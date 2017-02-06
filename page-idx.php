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
		<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry">
					<div id="idxStart" style="display: none;"></div>
					<div id="idxStop" style="display: none;"></div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div><!-- end #content -->

	<div class="sidebar">
		<?php get_sidebar()?>
	</div>

</div><!-- end #content-full -->
<?php

?>
<script>jQuery(document).ready(function(){jQuery('#IDX-hp').val('150000000');

function GetURLParameter(sParam)
{
	var sPageURL = window.location.search.substring(1);
	var sURLVariables = sPageURL.split('&');
	for (var i = 0; i < sURLVariables.length; i++)
	{
		var sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] == sParam)
		{
			return sParameterName[1];
		}
	}
}


jQuery('select option[value=51351]').removeAttr('selected');
var mytitle = jQuery('.IDX-currentPageLink').text();
jQuery('.entry-title').html(mytitle);
if(GetURLParameter('city[]') == 51351)
	{
	setTimeout(function(){jQuery('select option[value="Westwood - Century City (C05)"]').attr('selected','selected'); }, 3000);
}

});

</script>
<?php get_footer(); ?>
