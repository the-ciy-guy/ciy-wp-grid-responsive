<?php 

/*
    @package gridresponsive

    Front Page Template
*/
get_header();
?>
<!-- Top Container -->
    <section class="top-container">
        <header class="showcase" style="background-image: url(<?php echo get_theme_mod('header_image', get_template_directory_uri() . '/img/pic1.jpg'); ?>)";>
            <h1><?php echo get_theme_mod('header_heading', 'Your Web Presence'); ?></h1>
            <p><?php echo get_theme_mod('main_header_text', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit laboriosam repellendus provident animi accusantium eveniet!'); ?></p>
            <a href="<?php echo get_theme_mod('header_button_url', 'http://www.yoururl.com'); ?>" class="btn"><?php echo get_theme_mod('header_button_text', 'Read More'); ?></a>
        </header>
        <div class="top-box top-box-a">
            <h4><?php echo get_theme_mod('sales_box_title', 'Membership'); ?></h4>
            <p class="price"><?php echo get_theme_mod('sales_box_offer', '$199/mo'); ?></p>
            <a href="<?php echo get_theme_mod('sales_box_button_url', 'http://www.yoururl.com'); ?>" class="btn"><?php echo get_theme_mod('sales_box_button_text', 'Buy Now'); ?></a>
        </div>
        <div class="top-box top-box-b">
            <h4><?php echo get_theme_mod('sales_box_title_two', 'Pro Membership'); ?></h4>
            <p class="price"><?php echo get_theme_mod('sales_box_offer_two', '$299/mo'); ?></p>
            <a href="<?php echo get_theme_mod('sales_box_button_url_2', 'http://www.yoururl.com'); ?>" class="btn"><?php echo get_theme_mod('sales_box_button_text_2', 'Buy Now'); ?></a>
        </div>
    </section>
    <!-- Boxes Section -->
    <section class="boxes">
        <div class="box">
            <i class="<?php echo get_theme_mod('box_icon', 'fas fa-chart-pie fa-4x'); ?>"></i>
            <h3><?php echo get_theme_mod('box_heading', 'Analytics'); ?></h3>
            <p><?php echo get_theme_mod('box_text', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.'); ?></p>
        </div>  
        <div class="box">
            <i class="<?php echo get_theme_mod('box_icon_2', 'fas fa-globe fa-4x'); ?>"></i>
            <h3><?php echo get_theme_mod('box_heading_2', 'Marketing'); ?></h3>
            <p><?php echo get_theme_mod('box_text_2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.'); ?></p>
        </div>
        <div class="box">
            <i class="<?php echo get_theme_mod('box_icon_3', 'fas fa-cog fa-4x'); ?>"></i>
            <h3><?php echo get_theme_mod('box_heading_3', 'Development'); ?></h3>
            <p><?php echo get_theme_mod('box_text_3', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.'); ?></p>
        </div>
        <div class="box">
            <i class="<?php echo get_theme_mod('box_icon_4', 'fas fa-users fa-4x'); ?>"></i>
            <h3><?php echo get_theme_mod('box_heading_4', 'Support'); ?></h3>
            <p><?php echo get_theme_mod('box_text_4', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.'); ?></p>
        </div>
    </section>
    <!-- Info Section -->
    <section class="info">
        <?php echo get_the_post_thumbnail(get_theme_mod('single_page', '')); ?>
        <div>
            <h2><?php echo get_the_title(get_theme_mod('single_page', 'Your Business on the web')); ?></h2>
            <p><?php echo get_the_excerpt(get_theme_mod('single_page')); ?></p>
            <a href="<?php echo get_theme_mod('single_page_button_url', 'http://www.urlhere.com'); ?>" class="btn"><?php echo get_theme_mod('single_page_button_text', 'Learn More'); ?></a>
        </div>
    </section>
    <!-- Portfolio -->
    
        <?php 
            if(is_active_sidebar('gallery')) : ?>
                <section id="gallery" class="portfolio" role="complementary">
                    <?php dynamic_sidebar('gallery'); ?>
                </section>
        <?php endif; ?>

    <!-- Footer -->
    <footer>
        <p>GridBiz &copy; 2018</p>
    </footer>
   </div>
    <!-- Wrapper Ends  -->
    <?php get_footer(); ?>