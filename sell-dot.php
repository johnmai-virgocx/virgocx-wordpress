<?php
/**
 * Template Name: Sell DOT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Polkadot',
	'ticker' => 'DOT',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
