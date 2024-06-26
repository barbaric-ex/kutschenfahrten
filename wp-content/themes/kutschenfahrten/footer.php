<?php if (have_rows('footer', 'options')) : ?>
	<?php while (have_rows('footer', 'options')) : the_row();

		$text_info_1 = get_sub_field('text_info_1');

		$text_info_2 = get_sub_field('text_info_2');




		$copyright_text_link = get_sub_field('copyright_text_link');


	?>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wrapper1">
							<div class="logo wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
								<img src="<?php echo get_template_directory_uri(); ?>/img/Logo/Kutschenfarten_logo.svg" alt="">
							</div>

							<div class="link_wrapper wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.5s">
								<?php
								$link = get_sub_field('link_1');
								if ($link) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
								?>



									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="wrapper2">
							<div class="wrap wrap1">
								<div class="social_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
									<?php
									$link = get_sub_field('social_link_1');
									if ($link) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>



										<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
											<div class="image image1">
												<img src="<?php echo get_template_directory_uri(); ?>/img/Shapes/icons8-instagram.svg" alt="">
											</div>
										</a>
									<?php endif; ?>
									<?php
									$link = get_sub_field('social_link_2');
									if ($link) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>



										<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
											<div class="image image2">
												<img src="<?php echo get_template_directory_uri(); ?>/img/Shapes/icons8-facebook.svg" alt="">
											</div>
										</a>
									<?php endif; ?>
								</div>

							</div>
							<?php if ($text_info_1) : ?>
								<div class="wrap wrap2 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
									<?php echo $text_info_1 ?>

								</div>
							<?php endif; ?>
							<?php if ($text_info_2) : ?>
								<div class="wrap wrap3 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
									<?php echo $text_info_2 ?>


								</div>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-lg-6">

					</div>

					<div class="col-lg-12">
						<?php if ($copyright_text_link) : ?>
							<div class="last_wrap">
								<?php echo $copyright_text_link ?>
							</div>
						<?php endif; ?>


					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>


</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/animsition.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.marquee.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<?php wp_footer() ?>

<script>
	$(window).on('load', function() {
		wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 5,
			mobile: true,
			live: true
		})
		wow.init();
	});
</script>
</body>

</html>