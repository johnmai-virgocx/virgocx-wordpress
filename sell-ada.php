<?php
/**
 * Template Name: Sell ADA page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Cardano',
	'ticker' => 'ADA',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
