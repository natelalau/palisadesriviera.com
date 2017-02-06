<?php
/**
 * Name: Breadcrumbs
 *
 * @package PalisadesRiviera breadcrumbs
 * Description: This file is used to display Yoast Breadcrumbs, and similar styles to Twitter Bootstrap.
 */

// WordPress SEO Breadcrumb!
if ( function_exists( 'yoast_breadcrumb' ) ) {
	yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
