<?php
/**
 * Template Name: Contact us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>
    <style>
		
		#contactUs-GetStarted {
			width: 40%;
			background: linear-gradient(180deg, #56a6d4 0%, #7173e2 98%);
			color: #fff;
			padding: 0;
			margin-bottom: 2rem;
			border-radius: 5px;
			border: none;
			-webkit-transition: 0.4s all ease;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
		}

.contact-us-banner {
  background-image: url(<?= get_template_directory_uri() ?>/img/contactus/03-contact-us-u63d2u56fe-2E768509-59EA-4BD3-BFF1-EE51BC511F8C2x.png);
  background-size: 100%;
  background-color: transparent;
  height: 300px;
}
.contact-us-banner h2 {
	padding-top: 4rem;
}

#contact-us-content {
	margin: 6rem 0;
	color: rgb(102, 97, 127);
	font-size: 1rem;
}
#contact-details,
#contact-form {
	height: 420px;
}

#contact-details {
	background-color: rgb(226, 250, 247);
	padding: 2rem 1rem;
	border-radius: 1rem;
	height: 420px;
}

#contact-details .col-6 {
	text-align: right;
}

#contact-details .row {
	margin-bottom: 1.5rem;
}

#contact-details img {
	width: 40px;
}

#contact-details .next-to-img {
	display: inline;
	padding-left: 0.5rem;
}

#contact-us-content form.normal input[type="submit"] {
	width: 40%;
}

#contact-us-content form.normal {
}

form.normal .form-control {
	margin-bottom: 2rem;
}

form.normal .form-control:focus,
form.normal .form-control input:focus {
	background-color: #f2f2f7;
}

</style>

				<div class="contact-us-banner">
					<div class="container">
						<h2 data-translate="ContactUs"></h2>
					</div>
				</div>

		<div class="container contact-us-content">
			<div id="contact-us-content">

				<div class="row justify-content-between">
					<div id="contact-form" class="col-lg-5 col-md-11">
						<?= do_shortcode('[contact-form-7 id="80" title="Contact us" html_class="contact-us normal"]') ?>
					</div>

					<div id="contact-details" class="col-lg-6 col-md-11">

						<div class="row justify-content-between">
							<div class="col-5">
								<img class="customer-support-MPri8b" src="<?= get_template_directory_uri() ?>/img/contactus/03-contact-us-customer-support-DC2F9B2E-24A8-4A4A-B92F-B3C94FB18DBD3x.png" />
								<div class="next-to-img" data-translate="ContactUs_general_Inquiry"></div>
							</div>

							<div class="col-6">
								info@virgocx.ca
							</div>
						</div>

						<div class="row justify-content-between">
							<div class="col-5">
								<img class="customer-support-MPri8b" src="<?= get_template_directory_uri() ?>/img/contactus/03-contact-us-customer-support-DC2F9B2E-24A8-4A4A-B92F-B3C94FB18DBD3x.png" />
								<div class="next-to-img" data-translate="ContactUs_customer_support"></div>
							</div>

								<div class="col-6" data-translate="ContactUs_info">
									Visit our Support Centre or email us at support@virgocx.ca
								</div>
						</div>

						<div class="row justify-content-between">
							<div class="col-5">
								<img class="press-and-media-hZ8U6E" src="<?= get_template_directory_uri() ?>/img/contactus/03-contact-us-press-and-media-90332D0C-4F85-4982-8BE8-8B76E7C28BD53x.png" />
								<div class="next-to-img" data-translate="ContactUs_press_media"></div>
							</div>

							<div class="col-6">media@virgocx.ca</div>
						</div>

						<div class="row justify-content-between">
							<div class="col-5">
								<img class="phone-XWuRxg" src="<?= get_template_directory_uri() ?>/img/contactus/03-contact-us-phone-6B7FD295-4CB4-41E6-80A8-1F3F81E729433x.png" />
								<div class="next-to-img" data-translate="ContactUs_phone"></div>
							</div>

							<div class="col-6">+1 (416) 583-1838</div>
						</div>

						<div class="row justify-content-between">
							<div class="col-5">
								<img class="head-office-rWRKVs" src="<?= get_template_directory_uri() ?>/img/contactus/03-contact-us-head-office-4ABBC471-756B-4CDE-9103-479B2C853FE43x.png" />
								<div class="next-to-img" data-translate="ContactUs_head_office"></div>
							</div>

							<div class="col-6">
								45 Sheppard Ave E, #803, Toronto, ON, Canada M2N 5N1
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

<?php
get_footer();
