<?php
/**
 * Template Name: Sell ENJ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Enjin Coin',
	'ticker' => 'ENJ',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
