<?php
if( have_posts() ):while( have_posts() ):the_post();
?>
<div class="entry clearfix"> 
    <div class="entry-image">
        <?php if(has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>">
            </a>
        <?php endif; ?>
    </div>
    <div class="entry-c">
        <div class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
        </div>
        <ul class="entry-meta clearfix">
            <li><i class="icon-calendar3"></i><?php  echo get_the_date('j/n/Y'); ?></li>
        </ul>
        <div class="entry-content">
            <?php the_excerpt();?>
            <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
        </div>
    </div>     
</div>           
<?php
endwhile; else: endif;
?>