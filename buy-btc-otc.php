<?php
/**
 * Template Name: Buy btc-otc page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Bitcoin',
	'ticker' => 'BTC',
];
get_template_part('template-parts/buy-coin-otc', 'coin', $args);
?>
