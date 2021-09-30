<?php
/**
 * Template Name: Buy XLM page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Stellar',
	'ticker' => 'XLM',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
