<?php
/**
 * Template Name: Buy ENJ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Enjin Coin',
	'ticker' => 'ENJ',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
