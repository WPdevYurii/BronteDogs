<?php
/*
Template Name: Flexible Sections
Template Post Type: page
*/

get_header(); 
if (have_rows('sections')) :

    while (have_rows('sections')) : the_row();

        get_template_part('template-parts/sections/s-' . get_row_layout());

    endwhile;

endif;

get_footer();