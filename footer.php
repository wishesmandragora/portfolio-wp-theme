<!-- Footer-->
<footer id="footer" class="dark">
	<div class="container">
		<!-- Footer Widgets-->
		<div class="footer-widgets-wrap clearfix">
			<div class="col_two_third">
				<div class="col_one_third">
					<div class="widget clearfix">
                        <?php if( is_active_sidebar('footer-1') ): ?> 
                            <?php dynamic_sidebar('footer-1') ?>
                        <?php endif ?>
					</div>
				</div>
				<div class="col_one_third">
					<div class="widget widget_links clearfix">
                        <?php if( is_active_sidebar('footer-2') ): ?> 
                            <?php dynamic_sidebar('footer-2') ?>
                        <?php endif ?>
					</div>
				</div>
				<div class="col_one_third col_last">
					<div class="widget clearfix">
                        <?php if( is_active_sidebar('footer-3') ): ?> 
                            <?php dynamic_sidebar('footer-3') ?>
                        <?php endif ?>	
					</div>
				</div>
			</div>
			<div class="col_one_third col_last">
				<div class="widget clearfix" style="margin-bottom: -20px;">
                     <?php if( is_active_sidebar('footer-4') ): ?> 
                        <?php dynamic_sidebar('footer-4') ?>
                    <?php endif ?>
				</div>
			</div>
		</div><!-- .footer-widgets-wrap end -->
	</div>
	<!-- Copyrights-->
		<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
					<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
				</div>
				<div class="col_half col_last tright">
					<div class="fright clearfix">
						<a href="#" class="social-icon si-small si-borderless si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="#" class="social-icon si-small si-borderless si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>
							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
						<div class="clear"></div>
						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span>
						<i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> 
						<i class="icon-skype2"></i> CanvasOnSkype
					</div>
				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
<?php
wp_footer();

?>
</body>
</html>