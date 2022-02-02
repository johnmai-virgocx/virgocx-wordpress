<?php
/**
 * Template Name: Buy STORJ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Storj',
	'ticker' => 'STORJ',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
