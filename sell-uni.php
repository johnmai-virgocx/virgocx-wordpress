<?php
/**
 * Template Name: Sell Uni page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
    'name' => 'Uniswap',
    'ticker' => 'UNI',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
