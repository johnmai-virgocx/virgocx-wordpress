<?php
/**
 * Template Name: Buy Bitcoin page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Bitcoin',
	'ticker' => 'BTC',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
