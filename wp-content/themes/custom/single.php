<?php
/**
 * Template Name: bmsm
 * Authur: Agoi Abel
 */
?>

<?php get_header(); ?>

    <div class="container bmsm">
        
        <section class="">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>
                
                <div class="container container_bmsm__header">
                    <p class="page_title">
                       <p class=" bmsm_title"> <?= the_title(); ?> </p>
                    </p>
                    <div class="bmsm_subtitle mobile_bmsm__subtitle">It is the dawn of a new decade a</div>
                    <div class="bmsm_subtitle web_bmsm__subtitle">Together with the Metropolitan </div>
                </div> 
            </div>

            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
                </div>
                <div class="say_hello" onclick="location.href = '/contact';">Say hello</div>
            </div>
        </section>

        <div class="big_empty"></div>

        <section>
            <div class="container container_bmsm">

                <div class="container_bmsm__maincontent">
                    <div>
                        <p class="bmsm_content__description">
	                    	<?php get_template_part('includes/section', 'content') ?>
                        </p>
                    </div>
            	</div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>