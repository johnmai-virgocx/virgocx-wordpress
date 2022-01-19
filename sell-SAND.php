<?php
/**
 * Template Name: Sell SAND page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'The Sandbox',
	'ticker' => 'SAND',
];
get_template_part('template-parts/sell', 'coin', $args);
?>

