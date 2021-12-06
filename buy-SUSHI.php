<?php
/**
 * Template Name: Buy SUSHI page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'SushiSwap',
	'ticker' => 'SUSHI',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
