<?php 

/*
    @package gridresponsive

    Index Template
*/
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
// Post format
get_template_part('content', get_post_format());
// echo 'This is the format: '.get_post_format();

endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; 

get_footer();
?>
