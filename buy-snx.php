<?php
/**
 * Template Name: Buy SNX page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Synthetix',
	'ticker' => 'SNX',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
