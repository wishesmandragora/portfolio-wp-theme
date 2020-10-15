<?php
if(have_posts() ):while(have_posts() ):the_post();
?>
	<!-- Single Post-->
	<div class="entry clearfix">
		<!-- Entry Title -->
		<div class="entry-title">
            <h2><?php the_title(); ?></h2>
        </div> <!-- .entry-title end -->
        <ul class="entry-meta clearfix">
			<li><i class="icon-calendar3"></i><?php  echo get_the_date('j/n/Y'); ?></li>
		</ul><!-- .entry-meta end -->
        <div class="entry-image">
            <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail() ): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                <?php endif; ?>
            </a>
        </div><!-- .entry-image end -->
        <div class="entry-content notopmargin">
            <?php the_content();?>
        </div>
    </div>
<?php
endwhile; else: endif;
?>