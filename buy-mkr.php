<?php
/**
 * Template Name: Buy MKR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Maker',
	'ticker' => 'MKR',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
