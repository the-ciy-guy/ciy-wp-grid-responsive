<?php 

/*
    @package gridresponsive

    Header Template
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <nav class="main-nav">
        <?php
            wp_nav_menu(array(
                'main-navbar'    => 'Main Navbar'
            ));
        ?> 
    </nav>
</div>    
