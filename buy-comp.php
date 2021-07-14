<?php
/**
 * Template Name: Buy COMP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Compound',
	'ticker' => 'COMP',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
