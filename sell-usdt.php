<?php
/**
 * Template Name: Sell USDT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Tether',
	'ticker' => 'USDT',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
