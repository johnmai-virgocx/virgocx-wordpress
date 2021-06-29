<?php
/**
 * Template Name: Sell CRV page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Curve',
	'ticker' => 'CRV',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
