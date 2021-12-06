<?php
/**
 * Template Name: Buy KSM page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Kusama',
	'ticker' => 'KSM',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
