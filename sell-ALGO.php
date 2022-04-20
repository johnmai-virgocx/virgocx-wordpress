<?php
/**
 * Template Name: Sell ALGO page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Algorand',
	'ticker' => 'ALGO',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
