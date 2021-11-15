<?php
/**
 * Template Name: Buy GRT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'The Graph',
	'ticker' => 'GRT',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
