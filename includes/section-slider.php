<?php
function get_first_slide_url() {
    if ( get_theme_mod( 'first_slide' ) == true ) {
        echo get_theme_mod( 'first_slide' ) ;
    } else {
        echo  get_template_directory_uri() . '/assets/images/about/4.jpg';
    }
}
function get_second_slide_url() {
    if ( get_theme_mod( 'second_slide' ) == true ) {
        echo get_theme_mod( 'second_slide' ) ;
    } else {
        echo  get_template_directory_uri() . '/assets/images/about/landing1.jpg';
    }
}
function get_third_slide_url() {
    if ( get_theme_mod( 'third_slide' ) == true ) {
        echo get_theme_mod( 'third_slide' ) ;
    } else {
        echo  get_template_directory_uri() . '/assets/images/about/1.jpg';
    }
}
?>
<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide dark" style="background-image: url('<?php echo esc_url(get_first_slide_url());?>')">
					<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-animate="fadeInUp"><?php echo get_theme_mod('text_1') ?></h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?php echo get_theme_mod('text_input1') ?></p>
							</div>
					</div>
				</div>
				<div class="swiper-slide dark" style="background-image: url('<?php echo esc_url(get_second_slide_url());?>'); background-position: center top;">
					<div class="container clearfix">
						<div class="slider-caption">
							<h2 data-animate="fadeInUp"><?php echo get_theme_mod('text_2') ?></h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?php echo get_theme_mod('text_input2') ?></p>
						</div>
					</div>
				</div>
				<div class="swiper-slide" style="background-image: url('<?php echo esc_url(get_third_slide_url());?>'); background-position: center top;">
					<div class="container clearfix">
						<div class="slider-caption slider-caption-right">
							<h2 data-animate="fadeInUp"><?php echo get_theme_mod('text_3') ?></h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?php echo get_theme_mod('text_input3') ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
			<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
			<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
		</div>
	</div>
</section>