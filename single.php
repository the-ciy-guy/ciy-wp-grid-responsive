<?php 

/*
    @package gridresponsive

    Single Blog Template
*/
get_header();

while(have_posts()) : the_post();

the_title();
the_content();
the_author();
endwhile;

get_footer();