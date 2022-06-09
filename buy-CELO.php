<?php
/**
 * Template Name: Buy CELO page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Celo',
	'ticker' => 'CELO',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
