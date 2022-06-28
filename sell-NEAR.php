<?php
/**
 * Template Name: Sell NEAR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'NEAR Protocol',
	'ticker' => 'NEAR',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
