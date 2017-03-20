<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$context['latest_post'] = Timber::get_posts(['posts_per_page' => 1])[0];
$context['footer_center'] = Timber::get_widgets('footer_center');
$context['footer_right'] = Timber::get_widgets('footer_right');
Timber::render( '404.twig', $context );
