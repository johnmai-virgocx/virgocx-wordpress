<?php
/**
 * Template Name: Buy UST page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'TerraUSD',
	'ticker' => 'UST',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
