<?php
/**
 * Template Name: Buy KNC page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Kyber Network',
	'ticker' => 'KNC',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
