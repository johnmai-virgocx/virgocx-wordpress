<?php
/**
 * Template Name: Sell OP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Optimism',
	'ticker' => 'OP',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
