<?php
/**
 * Template Name: Sell atom page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Cosmos',
	'ticker' => 'ATOM',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
