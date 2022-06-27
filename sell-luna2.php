<?php
/**
 * Template Name: Sell LUNA2 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Terra',
	'ticker' => 'LUNA2',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
