<?php
/**
 * Template Name: Buy BAT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Basic Attention Token',
	'ticker' => 'BAT',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
