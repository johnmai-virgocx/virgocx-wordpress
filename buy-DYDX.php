<?php
/**
 * Template Name: Buy DYDX page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'dYdX',
	'ticker' => 'DYDX',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
