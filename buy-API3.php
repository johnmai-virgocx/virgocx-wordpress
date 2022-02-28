<?php
/**
 * Template Name: Buy API3 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'API3',
	'ticker' => 'API3',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
