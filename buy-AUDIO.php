<?php
/**
 * Template Name: Buy AUDIO page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Audius',
	'ticker' => 'AUDIO',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
