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
                <div class="container container_bmsm__header container_career2__header">
                    <div class="career2_header__subtitle">
                        <div class="header_subtitle header_subtitle__margin">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/career_detail_icon.svg" alt="">
                            <p class="career2_subtitle"> <?= the_field('career_type'); ?></p>
                        </div>
                        <div class="header_subtitle">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/carbon_location.svg" alt="">
                            <p class="career2_subtitle"> lagos</p>
                        </div>
                    </div>
                    <p class="page_title">
                       <p class=" bmsm_title career_details__heading"> <?= the_title(); ?> </p>
                    </p>

                    <a class=" career_details__link">
                        <i class="fa fa-plus career-fa-plus" aria-hidden="true"></i> <span class="career2_subtitle">APPLY NOW</span>
                    </a>
                    
                    <div class="career_brands">
                        <p class="brands_title">share</p>
                        <div class="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 39.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 41.svg" class="career_twitter__brand" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 40.svg" alt="">
                        </div>
                    </div>
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
        
        <section class="container">
            <div class="career_container">
               
                <div class="career_container__content">
                    <div class="career2_section1">
                        <p class="career2_section_description">
                            <?= the_field('description'); ?>
                        </p>
                    </div>

                    <div class="container_section3">
                        <h1 class="section3_heading">Responsibilities</h1>
                        <ul class="career2_content">
                           <li><?= the_field('responsibility_one'); ?></li> 
                           <li><?= the_field('responsibility_two'); ?></li> 
                           <li><?= the_field('responsibility_three'); ?></li> 
                           <li><?= the_field('responsibility_four'); ?></li> 
                           <li><?= the_field('responsibility_five'); ?></li>
                        </ul>
                    </div>
                   
                    <div class="container_section3 container_career2__benefits">
                        <h1 class="section3_heading">Benefits</h1>
                       
                        <ul class="career2_content">
                           <li><?= the_field('benefit_one'); ?></li> 
                           <li><?= the_field('benefit_two'); ?></li> 
                           <li><?= the_field('benefit_three'); ?></li> 
                           <li><?= the_field('benefit_four'); ?></li> 
                           <li><?= the_field('benefit_five'); ?></li> 
                        </ul>
                    </div>


                   <div class="career2_section6">
                       <p  class="career2_section_description">
                            <?= the_field('closing_remark') ?>
                        </p>
                   </div>


                   <div class="career2_section7 career_brands">
                       <h1 class="career2_section7__heading">Got what it takes?</h1>
                       <div class="">
                            <a class="bmsm_link career_details__link">+ APPLY NOW </a>
                            <div id="career_feedback"></div>
                        </div>
                   </div>
                  


                    <!-- Get the careers -->
                    <form class="contact_us__description__form scholarship_form" id="career_form">
                        <div class="form__group career_form__group">
                            <label class="form__label">Your name</label>
                            <input name="name" text="text" class="form__control" placeholder="Enter your name" required />
                        </div>

                        <div class="form__group career_form__group">
                            <label class="form__label">Email address</label>
                            <input name="email" type="email" class="form__control" placeholder="Enter your work email" required />
                        </div>

                        <div class="form__group career_form__group">
                            <label class="form__label">Phone number</label>
                            <input name="phone_number" text="number" class="form__control" placeholder="Enter your phone number" required />
                        </div>
                            
                        <div class="form__group scholarship_form__group career_form__group">
                            <label class="form__label">Position applying for</label>
                            <select name="position" class="form__control" placeholder="Select preferred position" required>
                                <option value='<?= the_title(); ?>'><?= the_title(); ?></option>
                            </select>
                        </div>
                     
                        <div class="form__group career_form__group">
                            <label class="form__label">Tell us about you</label>
                            <input name="about" type="text" class="form__control" placeholder="What makes you our bestcandidate? (less than 150 words)" required />
                        </div>

                        <div class="form__group center scholarship_button">
                            <button class="form__button">Send Application <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/go_right_icon.svg" /> </button>
                        </div>
                    </form>




                </div>
            </div>
        </section>

    </div>

<?php get_footer(); ?>

<script>
    (function($) {

        $('#career_form').submit(event => {
            event.preventDefault();

            const endpoint = '<?= admin_url('admin-ajax.php'); ?>';
            const form = $('#career_form').serialize();

            const formData = new FormData;

            formData.append('action', 'career');
            formData.append('career', form);
            formData.append('nonce', '<?= wp_create_nonce('ajax-nonce'); ?>');

            $.ajax(endpoint, {
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: res => {
                    $('#career_feedback').text(res.data);
                },
                error: err => {
                    $('career_feedback').text('Error reaching out to us');
                }
            });
        });

    })( jQuery );
</script>