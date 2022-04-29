<?php
/**
 * Template Name: Sell CVX page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Convex Finance',
	'ticker' => 'CVX',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
