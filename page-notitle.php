<?php 

/*
    Template Name: Page No Title

    @package gridresponsive

    Page Template
*/
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<H1>This is a static Page Title</H1>
<?php
the_content();
endwhile; else: ?>

<?php endif; ?>

<?php get_footer(); ?>