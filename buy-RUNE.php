<?php
/**
 * Template Name: Buy RUNE page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'THORChain',
	'ticker' => 'RUNE',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
