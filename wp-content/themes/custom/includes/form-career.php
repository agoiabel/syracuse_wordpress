<!-- Get the careers -->
<div id="career_feedback"></div>

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
            <?php
                $careers = new WP_Query([
                    'post_type' => 'career'
                ]);
                while($careers->have_posts()) {
                    $careers->the_post(); ?>
                        <option value='<?= the_title(); ?>'><?= the_title(); ?></option>
                    <?php }
            ?>
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
