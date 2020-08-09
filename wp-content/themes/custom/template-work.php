<?php
/**
 * Template Name: work
 * Authur: Agoi Abel
 */
?>
<?php get_header(); ?>
    <div class="container work">
        
        <section class="top">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>

                <p class="page_title"> Work </p>
            </div>

            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
                </div>
                <div class="say_hello">Say hello</div>
            </div>
        </section>

        <section class="projects">
            <div class="project" onclick="location.href = '/work_detail.html';">
                <div class="project__techno project--large"></div>
                <div class="project__title">Techno Mobile</div>
            </div>

            <div class="project project__even" onclick="location.href = '/work_detail.html';">
                <div class="project__gionee project--small"></div>
                <div class="project__title">Gionee</div>
            </div>

            <div class="project" onclick="location.href = '/work_detail.html';">
                <div class="project__oppo project--small"></div>
                <div class="project__title">OPPO Mobile</div>
            </div>

            <div class="project project__large project__even" onclick="location.href = '/work_detail.html';">
                <div class="project__adidas project--large"></div>
                <div class="project__title">Adidas</div>
            </div>

            <div class="project" onclick="location.href = '/work_detail.html';">
                <div class="project__techno project--large"></div>
                <div class="project__title">Techno Mobile</div>
            </div>

            <div class="project project__even" onclick="location.href = '/work_detail.html';">
                <div class="project__gionee project--small"></div>
                <div class="project__title">Gionee</div>
            </div>

            <div class="project" onclick="location.href = '/work_detail.html';">
                <div class="project__oppo project--small"></div>
                <div class="project__title">OPPO Mobile</div>
            </div>

            <div class="project project__large project__even" onclick="location.href = '/work_detail.html';">
                <div class="project__adidas project--large"></div>
                <div class="project__title">Adidas</div>
            </div>

            <div class="see_more"><a href="/">See more work</a></div>
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
                <div class="contact_us__description__form">
                    <div class="form__group">
                        <label class="form__label">Your name</label>
                        <input text="name" class="form__control" placeholder="Enter your name" />
                    </div>

                    <div class="form__group">
                        <label class="form__label">Email address</label>
                        <input text="email" class="form__control" placeholder="Enter your work email" />
                    </div>

                    <div class="form__group">
                        <label class="form__label">Your company</label>
                        <input text="email" class="form__control" placeholder="Enter your company's name" />
                    </div>

                    <div class="form__group">
                        <label class="form__label">Tell us about your project</label>
                        <input text="email" class="form__control" placeholder="E.g. Hello, I'd like to ...." />
                    </div>

                    <div class="form__group center">
                        <button class="form__button">Shoot <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/go_right_icon.svg" /> </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>