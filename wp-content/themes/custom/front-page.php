<?php get_header(); ?>

    <div class="container">
        <section class="top">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/index.html';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>
    
                <section class="banner">
                    <div class="banner__notification">
                        <span class="banner__notification__message" >Read our marketing 2020 report</span>
                    </div>

                    <div class="banner__description" id="link__grow">
                        We dance to the beat of creativity
                    </div>

                    <div class="banner__subdescription" id="link__grow">
                        Sed ut perspiciatis unde omnis iste natus riqot sit voluptatem accusantium doloremque.
                    </div>
                </section>
            </div>

            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg" />
                </div>
                <div class="say_hello">Say hello</div>
            </div>
            
            <section class="scroll_direction">
                <div class="scroll_direction__title">Scroll, please.</div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
            </section>
        </section>

        <section class="top_strategy">
            <div class="top_strategy__header">
                <div class="top_strategy__description">
                    <div class="top_strategy__title">
                        We create the strategies + processes that fuel the growth of businesses + people + the world
                    </div>
                    <div class="top_strategy__subtitle">
                        We are a 360° creative powerhouse handling everything from brand to digital marketing and solid PR.
                    </div>
                </div>
                <div class="top_strategy__image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/strategy.svg" alt="strategy.svg" />
                </div>    
            </div>

            <div class="strategies">
                <div class="strategy">
                    <div class="strategy__icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solid_strategy.svg" /></div>
                    <div class="strategy__title">
                        <div>Solid</div> <div>Strategy</div>
                    </div>
                    <div class="strategy__description">
                        We believe in creating great visuals co-existing with great strategy and message.
                    </div>
                </div>

                <div class="strategy">
                    <div class="strategy__icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_brightness.svg" /></div>
                    <div class="strategy__title">
                        <div>Clean</div> <div>Aesthetics</div>
                    </div>
                    <div class="strategy__description">
                        We believe in creating great visuals co-existing with great strategy and message.
                    </div>
                </div>

                <div class="strategy">
                    <div class="strategy__icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/seamless_strategy.svg" /></div>
                    <div class="strategy__title">
                        <div>Seamless</div> <div>Communication</div>
                    </div>
                    <div class="strategy__description">
                        We believe in creating great visuals co-existing with great strategy and message.
                    </div>
                </div>
            </div>
        </section>

        <section class="projects">
            <div class="project" id="link__grow">
                <div class="project__techno project--large"></div>
                <div class="project__title">Techno Mobile</div>
            </div>

            <div class="project project__even">
                <div class="project__gionee project--small"></div>
                <div class="project__title">Gionee</div>
            </div>

            <div class="project">
                <div class="project__oppo project--small"></div>
                <div class="project__title">OPPO Mobile</div>
            </div>

            <div class="project project__large project__even">
                <div class="project__adidas project--large"></div>
                <div class="project__title">Adidas</div>
            </div>

            <div class="see_more"><a href="/">See more work</a></div>
        </section>

        <section class="company_section">
            <div class="company__title">You are in great company</div>
            <div class="company__subtitle">We have been fortunate to deliver immense value to some of Africa’s most innovative companies.</div>

            <div class="companies">
                <div class="company"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/adidas_logo.svg" alt="adidas_logo"/></div>
                <div class="company"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/oppo_logo.svg" alt="oppo_logo"/></div>
                <div class="company"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sterling_bank_logo.svg" alt="sterling_logo"/></div>
                <div class="company"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/500_logo.svg" alt="500_logo"/></div>
                <div class="company"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gionee_logo.svg" alt="gionee_logo.svg"/></div>
                <div class="company"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tecno_logo.svg" alt="tecno_logo.svg"/></div>
            </div>
        </section>

        <section class="diploma_blog">
            <div class="diploma">
                <div class="diploma_blog__title">
                    <span>Syracuse</span> + MSBM Marketing Diploma
                </div>

                <p class="diploma_blog__description">
                    Together with our friends at the Metropolitan School of Business and Management UK, we have put together an intensive program.
                </p>

                <div class="see_more"><a href="/">Learn more</a></div>
            </div>

            <div class="blog">
                <div class="diploma_blog__title">
                    We write really cool stuff too
                </div>
                <p class="diploma_blog__description">
                    Together with our friends at the Metropolitan School of Business and Management UK, we have put together an intensive program.
                </p>

                <div class="see_more"><a href="/">Read blog</a></div>
            </div>
        </section>

        <?php get_template_part('includes/form', 'contact_us'); ?>

    </div>


<?php get_footer(); ?>