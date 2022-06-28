<?php
/**
 * Template Name: Buy NEAR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'NEAR Protocol',
	'ticker' => 'NEAR',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
