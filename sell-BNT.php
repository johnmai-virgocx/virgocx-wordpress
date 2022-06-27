<?php
/**
 * Template Name: Sell BNT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Bancor',
	'ticker' => 'BNT',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
