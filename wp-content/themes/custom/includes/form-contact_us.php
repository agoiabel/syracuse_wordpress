<section class="contact_us">
    <div class="contact_us__image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact_us.svg" /></div>
    
    <div class="contact_us__description">
        <div class="contact_us__description__subtitle">
            <div class="contact_us__description__subtitle--header">Like what you see?</div>
            <div class="contact_us__description__subtitle--header">Got a project you’d like to talk about?</div> 
            <div class="contact_us__description__subtitle--header">A new brief to chew up?</div>
        </div>
        <div class="contact_us__description__title">
            <span>Get in</span> <span class="contact_us__description__title--header">touch</span>
        </div>


		<div id="contact_feedback"></div>

		<form class="contact_us__description__form" id="contact">
		    <div class="form__group">
		        <label class="form__label">Your name</label>
		        <input name="name" type="text" class="form__control" placeholder="Enter your name" required />
		    </div>

		    <div class="form__group">
		        <label class="form__label">Email address</label>
		        <input name="email" type="email" class="form__control" placeholder="Enter your work email" required />
		    </div>

		    <div class="form__group">
		        <label class="form__label">Your company</label>
		        <input name="company" type="email" class="form__control" placeholder="Enter your company's name" />
		    </div>

		    <div class="form__group">
		        <label class="form__label">Tell us about your project</label>
		        <input type="text" name="about" class="form__control" placeholder="E.g. Hello, I'd like to ...." required />
		    </div>

		    <div class="form__group center">
		        <button class="form__button">Shoot <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/go_right_icon.svg" /> </button>
		    </div>
		</form>

    </div>
</section>

<script>
	(function($) {

		$('#contact').submit(event => {
			event.preventDefault();

			const endpoint = '<?= admin_url('admin-ajax.php'); ?>';
			const form = $('#contact').serialize();

			const formData = new FormData;

			formData.append('action', 'contact');
			formData.append('contact', form);
			formData.append('nonce', '<?= wp_create_nonce('ajax-nonce'); ?>');

			$.ajax(endpoint, {
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				success: res => {
					$('#contact_feedback').text(res.data);
				},
				error: err => {
					$('contact_feedback').text('Error reaching out to us');
				}
			});
		});

	})( jQuery );
</script>