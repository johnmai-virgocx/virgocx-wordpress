<?php
/**
 * Template Name: Sell GALA page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Gala',
	'ticker' => 'GALA',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
