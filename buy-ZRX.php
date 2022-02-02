<?php
/**
 * Template Name: Buy ZRX page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => '0x',
	'ticker' => 'ZRX',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
