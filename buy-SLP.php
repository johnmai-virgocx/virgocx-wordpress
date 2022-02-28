<?php
/**
 * Template Name: Buy SLP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Smooth Love Potion',
	'ticker' => 'SLP',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
