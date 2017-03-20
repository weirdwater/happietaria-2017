<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$templates = array( 'search.twig', 'archive.twig', 'index.twig' );
$context = Timber::get_context();

$context['title'] = 'Search results for '. get_search_query();
$context['posts'] = Timber::get_posts();
$context['latest_post'] = Timber::get_posts(['posts_per_page' => 1])[0];
$context['footer_center'] = Timber::get_widgets('footer_center');
$context['footer_right'] = Timber::get_widgets('footer_right');

Timber::render( $templates, $context );
