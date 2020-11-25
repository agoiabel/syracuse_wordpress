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
                <div class="say_hello" onclick="location.href = '/contact';">Say hello</div>
            </div>
        </section>

        <section class="projects">
            <?php
                $post_idx = 0;
                $works = new WP_Query([
                    'posts_per_page' => 4,
                    'post_type' => 'work'
                ]);
                while($works->have_posts()) {
                    $post_idx++;
                    $works->the_post(); ?>
                    <div class="project <?php echo ($post_idx % 2 == 0) ? 'project__even' : ''; ?>" id="link__grow" onclick="location.href = '<?= the_permalink(); ?>';">
                        <div class="project__image" style="background-image: url(<?= the_field('result_image') ?>);"></div>
                        <div class="project__title"><?= the_title(); ?></div>
                    </div>
                <?php }
            ?>
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