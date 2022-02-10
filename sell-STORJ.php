<?php
/**
 * Template Name: Sell STORJ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
    'name' => 'Storj',
    'ticker' => 'STORJ',
];
get_template_part('template-parts/sell', 'coin', $args);
?>

