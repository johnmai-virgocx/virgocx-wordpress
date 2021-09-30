<?php
/**
 * Template Name: Buy Polygon page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Polygon',
	'ticker' => 'MATIC',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
