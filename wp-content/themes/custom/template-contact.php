<?php
	/**
	 * Template Name: Contact us
     * Authur: Agoi Abel
 	*/
?>

<?php get_header(); ?>
    <div class="container contact_us_page">
        
        <section class="top">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>

                <!-- <p class="page_title"> Work </p> -->
            </div>

            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
                </div>
                <div class="say_hello">Say hello</div>
            </div>
        </section>

        <section class="contact_us">
            <div class="contact_us__image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact_us.svg" /></div>
            
            <div class="contact_us__description">
                <div class="contact_us__description__subtitle">
                    <span class="contact_us__description__subtitle--header">Like what you see?</span>
                    <span class="contact_us__description__subtitle--header">Got a project you’d like to talk about?</span> 
                    <span class="contact_us__description__subtitle--header">A new brief to chew up?</span>
                </div>
                <div class="contact_us__description__title">
                    <span>Get in</span> <span class="contact_us__description__title--header">touch</span>
                </div>

                <?php get_template_part('includes/form', 'contact_us'); ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>