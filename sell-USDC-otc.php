<?php
/**
 * Template Name: Sell usdc-otc page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'USD_Coin',
	'ticker' => 'USDC',
];
get_template_part('template-parts/sell-coin-otc', 'coin', $args);
?>
