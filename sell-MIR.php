<?php
/**
 * Template Name: Sell MIR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Mirror Protocol',
	'ticker' => 'MIR',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
