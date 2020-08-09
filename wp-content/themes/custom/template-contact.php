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

                <?php get_template_part('includes/form', 'contact_us'); ?>

    </div>

<?php get_footer(); ?>