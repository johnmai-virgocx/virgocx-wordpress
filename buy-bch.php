<?php
/**
 * Template Name: Buy BCH page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Bitcoin_Cash',
	'ticker' => 'BCH',
];
get_template_part('template-parts/buy', 'coin', $args);
?>

