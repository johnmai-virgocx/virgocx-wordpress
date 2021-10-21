<?php
/**
 * Template Name: Sell avax page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Avalanche',
	'ticker' => 'AVAX',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
