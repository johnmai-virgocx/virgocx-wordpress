<?php
/**
 * Template Name: Sell CELO page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Celo',
	'ticker' => 'CELO',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
