<?php
/**
 * Template Name: Buy eth-otc page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Ethereum',
	'ticker' => 'ETH',
];
get_template_part('template-parts/buy-coin-otc', 'coin', $args);
?>
