<?php
/**
 * Template Name: Sell ETH page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Ethereum',
	'ticker' => 'ETH',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
