<?php
/**
 * Template Name: Buy etc page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Ethereum Classic',
	'ticker' => 'ETC',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
