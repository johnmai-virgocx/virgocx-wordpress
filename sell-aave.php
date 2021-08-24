<?php
/**
 * Template Name: Sell AAVE page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Aave',
	'ticker' => 'AAVE',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
