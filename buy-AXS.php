<?php
/**
 * Template Name: Buy AXS page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Axie Infinity',
	'ticker' => 'AXS',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
