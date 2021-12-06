<?php
/**
 * Template Name: Buy CHZ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Chiliz',
	'ticker' => 'CHZ',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
