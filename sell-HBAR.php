<?php
/**
 * Template Name: Sell HBAR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Hedera',
	'ticker' => 'HBAR',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
