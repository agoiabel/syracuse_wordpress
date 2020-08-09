<?php
/**
 * Template Name: blog
 * Authur: Agoi Abel
 */
?>
<?php get_header(); ?>
<div class="container blog">

    <section class="top">
        <div class="header_banner">
            <header class="header">
                <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
            </header>

            <p class="page_title blog_title"> Blog </p>
        </div>

        <div class="scroll_direction__web">
            <div>
                <div class="scroll_direction__title">Scroll, please.</div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
            </div>
            <div class="say_hello">Say hello</div>
        </div>
    </section>


    <div class="container">
        <div class="wrapper_blog lorem">
            <div class="container_blog__content">
                <div class="blog__content">
                    <div class="blog__date">
                        mar 20
                    </div>
                    <p class="container_blog__link">
                        <a href="#" class="blog_link">The Future of Marketing in Africa: A New Decade</a>
                    </p>
                </div>
               
                <div class="blog__content">
                    <div class="blog__date">
                        feb 6
                    </div>
                    <p class="container_blog__link">
                        <a href="#" class="blog_link">The Future of Marketing in Africa: A New Decade</a>
                    </p>
                </div>
    
                <div class="blog__content">
                    <div class="blog__date">
                        jan 11
                    </div>
                    <p class="container_blog__link">
                        <a href="#" class="blog_link">The Future of Marketing in Africa: A New Decade</a>
                    </p>
                </div>
    
                <div class="blog__content">
                    <div class="blog__date">
                        may 5 2019
                    </div>
                    <p class="container_blog__link">
                        <a href="#" class="blog_link">The Future of Marketing in Africa: A New Decade</a>
                    </p>
                </div>
    
                <div class="blog__content">
                    <div class="blog__date">
                        april 25 2019
                    </div>
                    <p class="container_blog__link">
                        <a href="#" class="blog_link">The Future of Marketing in Africa: A New Decade</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>