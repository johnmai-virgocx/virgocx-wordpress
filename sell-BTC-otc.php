<?php
/**
 * Template Name: Sell btc-otc page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Bitcoin',
	'ticker' => 'BTC',
];
get_template_part('template-parts/sell-coin-otc', 'coin', $args);
?>
