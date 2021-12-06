<?php
/**
 * Template Name: Sell LRC page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
    'name' => 'Loopring',
    'ticker' => 'LRC',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
