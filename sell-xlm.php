<?php
/**
 * Template Name: Sell XLM page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Stellar',
	'ticker' => 'XLM',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
