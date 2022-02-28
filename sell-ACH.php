<?php
/**
 * Template Name: Sell ACH page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Alchemy Pay',
	'ticker' => 'ACH',
];
get_template_part('template-parts/sell', 'coin', $args);
?>