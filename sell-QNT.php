<?php
/**
 * Template Name: Sell QNT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Quant',
	'ticker' => 'QNT',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
