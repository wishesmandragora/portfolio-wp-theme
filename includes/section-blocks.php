<div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
	<div class="container clearfix">
		<h3>Call us today at +91.22.57412541 or Email us at support@canvas.com</h3>
			<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
				<a href="#" class="button button-dark button-xlarge button-rounded" style="background-color:<?php echo get_theme_mod( 'color_setting', '#FFFFFF' ); ?>">Start Browsing</a>
	</div>
</div>
<div class="container clearfix">
	<div class="col_one_fourth nobottommargin">
		<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="i-alt noborder icon-shop"  style="background-color:<?php echo get_theme_mod( 'color_setting_rgba' ); ?>"></i></a>
			</div>
			<h3>e-Commerce Solutions<span class="subtitle">Start your Own Shop today</span></h3>
		</div>
	</div>
	<div class="col_one_fourth nobottommargin">
		<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="i-alt noborder icon-wallet" style="background-color:<?php echo get_theme_mod( 'color_setting_rgba' ); ?>"></i></a>
			</div>
			<h3>Easy Payment Options<span class="subtitle">Credit Cards &amp; PayPal Support</span></h3>
		</div>
	</div>

	<div class="col_one_fourth nobottommargin">
		<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="i-alt noborder icon-megaphone" style="background-color:<?php echo get_theme_mod( 'color_setting_rgba' ); ?>"></i></a>
			</div>
		<h3>Instant Notifications<span class="subtitle">Realtime Email &amp; SMS Support</span></h3>
	    </div>
	</div>

	<div class="col_one_fourth nobottommargin col_last">
		<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="i-alt noborder icon-fire" style="background-color:<?php echo get_theme_mod( 'color_setting_rgba' ); ?>"></i></a>
			</div>
			<h3>Hot Offers Daily<span class="subtitle">Upto 50% Discounts</span></h3>
		</div>
	</div>

    <div class="clear"></div><div class="line bottommargin-lg"></div>
	<?php $img = get_theme_mod( 'image_setting_url', '' ); ?>
	<div class="col_two_fifth nobottommargin">
		<img src="<?php echo esc_url( $img ); ?>">
	</div>
	<div class="col_three_fifth nobottommargin col_last">
	<?php $textfield = get_theme_mod( 'text_setting', '' ); ?>
		<div class="heading-block">
			<h2><?php echo $textfield; ?></h2>
		</div>
		<?php 
		  $textarea = get_theme_mod('textarea_setting', ''); 
		  $textarea ? "<p><?php echo $textarea; ?></p>" : null;
		 ?>
        <p><?php echo $textarea; ?></p>
	</div>
    
    <div class="clear"></div><div class="line bottommargin-lg"></div>
    
    <?php
    $arguments = array(
        'post_type' => get_theme_mod('select_setting'),
        'post_status' => 'publish'
    );
    $loop = new WP_Query($arguments);
    ?>
    <div class="container clearfix">
        <div class="heading-block center">
            <h3><?php echo get_theme_mod('text_setting1');?></h3>
            <span><?php echo get_theme_mod('text_setting2');?></span>
        </div>
		</div>
		<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" 
            data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" 
            data-items-sm="2" data-items-md="3" data-items-xl="2">
       <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           
                <div class="oc-item">
					<div class="owl-stage-outer">
					<div class="iportfolio">
						<div class="portfolio-image">
                        <?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail_url(); ?>">
                            </a>
                        <?php endif; ?>
						</div>
						<div class="portfolio-desc">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
						</div>
					</div>
				</div>
          
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
<div class="clear"></div><div class="line bottommargin-lg"></div>
