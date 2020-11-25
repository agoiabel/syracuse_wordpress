<?php
/**
 * Template Name: work
 * Authur: Agoi Abel
 */
?>

<?php get_header(); ?>

    <div class="container work_detail">

        <div class="work_detail__header">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>    
            </div>

            <div class="container top_banner">
                <div class="top_banner__header__subheader">
                    <p class="top_banner__header"><?= the_title(); ?></p>
                    <p class="top_banner__subheader"><?= the_field('sub_title'); ?></p>
                </div>

                <div class="top_banner__description">
                    <?= the_field('description'); ?>
                </div>
            </div>


            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
                </div>
                <div class="say_hello" onclick="location.href = '/contact';">Say hello</div>
            </div>
        </div>

        <div class="work_detail__image" style="background-image: url(<?= the_field('result_image') ?>);"></div>

        <section class="work_detail__descriptions container">
            <div class="work_detail__description__big_empty">
                <div class="work_detail__description">
                    <p class="work_detail__description_header">The Task</p>
                    <p class="work_detail__description_content">
                        <?= the_field('task'); ?>
                    </p>    
                </div>
                <div class="task__image" style="background-image: url(<?= the_field('task_image') ?>);"></div>
            </div>

            <div class="work_detail__description__big_empty">
                <div class="alternate">
                    <div class="work_detail__description">
                        <p class="work_detail__description_header">The Plan</p>
                        <p class="work_detail__description_content">
                            <?= the_field('plan'); ?>
                        </p>
                    </div>    
                </div>
                <div class="task__image" style="background-image: url(<?= the_field('plan_image') ?>);"></div>                
            </div>
        </section>

        <section class="result container">
            <div class="result__description">
                <p class="result__header">The Results</p>
                
                <p class="result__content">
                    <?= the_field('result'); ?>
                </p>

                <div><a href="<?= the_field('result_url'); ?>" target="_blank">Launch site</a></div>
            </div>

            <div class="result__image" style="background-image: url(<?= the_field('result_image'); ?>);"></div>
        </section>

        <section class="location container">
            <div class="location__step_one">
                <div class="location__content">
                    <div class="location__title">CLIENT</div>
                    <div class="location__description"><?= the_field('client'); ?></div>
                </div>

                <div class="location__content">
                    <div class="location__title">Sector</div>
                    <div class="location__description"><?= the_field('sector_one'); ?></div>
                    <div class="location__description"><?= the_field('sector_two'); ?></div>
                    <div class="location__description"><?= the_field('sector_three'); ?></div>
                </div>

                <div class="location__content">
                    <div class="location__title">Field</div>
                    <div class="location__description"><?= the_field('field_one'); ?></div>
                    <div class="location__description"><?= the_field('field_two'); ?></div>
                    <div class="location__description"><?= the_field('field_three'); ?></div>
                </div>
            </div>
            
            <div class="location__step_two">
                <div class="location__content">
                    <div class="location__title">location</div>
                    <div class="location__description"><?= the_field('location'); ?></div>
                </div>

                <div class="location__content">
                    <div class="location__title">project team</div>
                    <div class="location__description"><?= the_field('project_team_one'); ?></div>
                    <div class="location__description"><?= the_field('project_team_two'); ?></div>
                    <div class="location__description"><?= the_field('project_team_three'); ?></div>
                </div>
    
            </div>
        </section>
    </div>


<?php get_footer(); ?>