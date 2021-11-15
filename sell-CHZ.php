<?php
/**
 * Template Name: Sell CHZ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Chiliz',
	'ticker' => 'CHZ',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
