<?php
/**
 * Template Name: Sell LINK page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Chainlink',
	'ticker' => 'LINK',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
