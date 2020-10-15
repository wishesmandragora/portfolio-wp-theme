<?php
if( have_posts() ):while( have_posts() ):the_post();
?>
<div class="col_two_third portfolio-single-image nobottommargin">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php the_post_thumbnail_url(); ?>"/>
		</a>
	<?php endif; ?>
</div><!-- .portfolio-single-image end -->
<!-- Portfolio Single Content -->
	<div class="col_one_third portfolio-single-content col_last nobottommargin">
		<!-- Portfolio Single - Description-->
		<div class="fancy-title title-bottom-border">
			<h2>Project Info:</h2>
		</div>
			<?php the_content(); ?>
			<!-- Portfolio Single - Description End -->
				<div class="line"></div>

				<!-- Portfolio Single - Meta-->
					<ul class="portfolio-meta bottommargin">
						<li><span><i class="icon-user"></i>Created by: <?php the_author(); ?></li>
						<li><span><i class="icon-calendar3"></i>Completed: <?php the_field('date'); ?></li>
						<li><span><i class="icon-lightbulb"></i>Skills: <?php $terms = get_the_terms( $post->ID , 'skills' ); 
                    			foreach ( $terms as $term ) {
								echo '<a href="' . $term->link . '">' . $term->name . '</a>' . ' ';
                    			} 
                			?></li>
							<?php $link = get_field('client'); 
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
								<li><span><i class="icon-link"></i>Client: <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
							<?php endif; ?>
					</ul>
				<!-- Portfolio Single - Meta End -->
				<!-- Portfolio Single - Share-->
					<div class="si-share clearfix">
						<span>Follow For More:</span>
							<div>
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-behance">
									<i class="icon-behance"></i>
									<i class="icon-behance"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-email3">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
						    </div>
					    </div>
					<!-- Portfolio Single - Share End -->
				</div><!-- .portfolio-single-content end -->
				<div class="clear"></div>
				<div class="divider divider center">
					<i class="icon-circle"></i>

					<h4>Related Projects:</h4>

					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Open Imagination</a></h3>
									<span><a href="#">Media</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
<?php
endwhile; else: endif;



?>