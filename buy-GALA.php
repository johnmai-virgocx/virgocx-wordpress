<?php
/**
 * Template Name: Buy GALA page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Gala',
	'ticker' => 'GALA',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
