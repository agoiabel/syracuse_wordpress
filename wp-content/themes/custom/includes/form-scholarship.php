<form class="container_scholarship__form" id="scholarship">
    <h1 class="scholarship_form__title">Send in your application</h1>
    <p class="scholarship_form__subtitle">It’s time to take on the world</p>

    <div id="scholarship_feedback"></div>

    <div class="contact_us__description__form scholarship_form">

        <div class="form__group">
            <label class="form__label">Your name</label>
            <input type="text" name="name" class="form__control" placeholder="Enter your name" />
        </div>

        <div class="form__group">
            <label class="form__label">Email address</label>
            <input type="email" name="email" class="form__control" placeholder="Enter your work email" />
        </div>

        <div class="form__group">
            <label class="form__label">Phone number</label>
            <input type="number" name="phone_number" class="form__control" placeholder="Enter your phone number" />
        </div>

       <div class="scholarship_form__control">
            <div class="form__group scholarship_form__group scholarship_form__break">
                <label class="form__label">School of study</label>
                <input type="text" name="school_of_study" class="form__control" placeholder="Select preferred position" />
            </div>

            <div class="form__group scholarship_form__group">
                <label class="form__label">Course of study</label>
                <input type="text" name="course_of_study" class="form__control" placeholder="Select preferred position" />
            </div>
       </div>

        <div class="form__group">
            <label class="form__label">Introduce yourself</label>
            <input type="text" name="introduction" class="form__control" placeholder="What makes you our bestcandidate? (less than 150 words)" />
        </div>

        <div class="form__group center scholarship_button">
            <button class="form__button">Send Application <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/go_right_icon.svg" /> </button>
        </div>
    </div>
</form>

<script>
    (function($) {

        $('#scholarship').submit(event => {
            event.preventDefault();

            const endpoint = '<?= admin_url('admin-ajax.php'); ?>';
            const form = $('#scholarship').serialize();

            const formData = new FormData;

            formData.append('action', 'scholarship');
            formData.append('scholarship', form);
            formData.append('nonce', '<?= wp_create_nonce('ajax-nonce'); ?>');

            $.ajax(endpoint, {
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: res => {
                    $('#scholarship_feedback').text(res.data);
                },
                error: err => {
                    $('#scholarship_feedback').text('Error reaching out to us');
                }
            });
        });

    })( jQuery );
</script>
