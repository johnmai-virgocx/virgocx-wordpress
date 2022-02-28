<?php
/**
 * Template Name: Sell ENS page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Ethereum Name Service',
	'ticker' => 'ENS',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
