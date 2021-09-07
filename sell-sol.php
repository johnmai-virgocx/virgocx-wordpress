<?php
/**
 * Template Name: Sell sol page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Solana',
	'ticker' => 'SOL',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
