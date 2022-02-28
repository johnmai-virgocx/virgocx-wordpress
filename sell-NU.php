<?php
/**
 * Template Name: Sell NU page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'NuCypher',
	'ticker' => 'NU',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
