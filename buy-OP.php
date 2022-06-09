<?php
/**
 * Template Name: Buy OP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Optimism',
	'ticker' => 'OP',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
