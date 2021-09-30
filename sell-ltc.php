<?php
/**
 * Template Name: Sell Lite Coin page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Litecoin',
	'ticker' => 'LTC',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
