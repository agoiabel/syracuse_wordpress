<?php
/**
 * Template Name: career
 * Authur: Agoi Abel
 */
?>
<?php get_header(); ?>
    <div class="container career">
        
        <section class="top">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>
                
                <div class="container_bmsm__header container_career__header">
                  
                    <p class="page_title">
                       <p class=" bmsm_title career_heading"> We are always looking for bright
                        minds and creative excellence. </p>
                    </p>
                    <a class="career_link">
                        <i class="fa fa-plus career_fa__plus" aria-hidden="true"></i>
                        See job openings
                        <i class="fa fa-long-arrow-up career_fa__arrowup" aria-hidden="true"> </i>
                    </a>
                </div> 
               
            </div>

           

            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
                </div>
                <div class="say_hello">Say hello</div>
            </div>
        </section>

        <section>
            <div class="container container_bmsm container_career__content">
                <div class="big_empty career_big__empty">

                </div>
                <div class="container_bmsm__maincontent container_career__maincontent">
                    <div class="wrapper_career__section1">
                        <div class="career_section1">
                            <h1 class="bmsm_content__heading1">Why work with us</h1>
                            <p class="bmsm_content__description">Sed ut perspiciatis unde omnis iste natus riqot sit voluptatem accusantium doloremque. 
                                Sed ut perspiciatis unde omnis iste natus riqot sit voluptatem accusantium. Sed ut perspiciatis unde omnis iste natus riqot.</p>
                        </div>

                        <div>
                            <h1 class="bmsm_content__heading1">Our Mission</h1>
                            <p class="bmsm_content__description">Sed ut perspiciatis unde omnis iste natus riqot sit voluptatem accusantium doloremque. 
                                Sed ut perspiciatis unde omnis iste natus riqot sit voluptatem accusantium. Sed ut perspiciatis unde omnis iste natus riqot.</p>
                        </div>
                    </div>


                   <div>
                        <div class="container_section2">
                            <div class="career_section2__content">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_money.svg" class="section2_content__image" alt="">
                                <h3 class="career_section2__heading">Competitive Salary</h3>
                                <p class="career_section2__description">We believe in creating great visuals co-existing with great strategy and message.</p>
                            </div>

                            <div class="career_section2__content">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_health-cross.svg" class="section2_content__image" alt="">
                                <h3 class="career_section2__heading">Health Insurance</h3>
                                <p class="career_section2__description">We believe in creating great visuals co-existing with great strategy and message.</p>
                            </div>

                            <div class="career_section2__content">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group 49.svg" class="section2_content__image" alt="">
                                <h3 class="career_section2__heading">Career development</h3>
                                <p class="career_section2__description">We believe in creating great visuals co-existing with great strategy and message.</p>
                            </div>
                        </div>

                        <div class="container_section2">
                            <div class="career_section2__content">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_face-wink.svg" class="section2_content__image" alt="">
                                <h3 class="career_section2__heading">Vacation Time-off</h3>
                                <p class="career_section2__description">We believe in creating great visuals co-existing with great strategy and message.</p>
                            </div>
    
                            <div class="career_section2__content">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_laptop.svg" class="section2_content__image" alt="">
                                <h3 class="career_section2__heading">Comfortable Workplace</h3>
                                <p class="career_section2__description">We believe in creating great visuals co-existing with great strategy and message.</p>
                            </div>
    
                            <div class="career_section2__content">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_group.svg" class="section2_content__image" alt="">
                                <h3 class="career_section2__heading">Awesome Teammates</h3>
                                <p class="career_section2__description">We believe in creating great visuals co-existing with great strategy and message.</p>
                            </div>
                        </div>
                   </div>

                </div>

                <div class="container_career__bigempty">
                    <div class="big_empty career_big__empty1"></div>
                    <div class="big_empty career_big__empty2"></div>
                </div>

                <div class="container_career__section3">
                    <h1 class="career_section3__title">Open Positions</h1>
                    <p class="career_section3__subtitle">We're currently looking for help in the following areas:</p>
                    <div class="wrapper_career__content">

                    <?php
                        $careers = new WP_Query([
                            'posts_per_page' => 5,
                            'post_type' => 'career'
                        ]);
                        while($careers->have_posts()) {
                            $careers->the_post(); ?>
                                <div class="career_content" onclick="location.href = '<?= the_permalink(); ?>';">
                                    <p class="career_content__description"><?= the_title(); ?></p>
                                    <p class="career_content__description2">+ Apply</p>
                                </div>
                            <?php }
                    ?>
                    </div>
                </div>

                <div class="container_scholarship__form">
                    <h1 class="scholarship_form__title career_form__title">Send in your application</h1>
                    <p class="scholarship_form__subtitle career_form__subtitle">
                        Don’t see your dream job here? Send in a blank slate application and we will get back to you
                    </p>

                    <?php get_template_part('includes/form', 'career'); ?>
                </div>

            </div>
        </section>

    </div>

<?php get_footer(); ?>