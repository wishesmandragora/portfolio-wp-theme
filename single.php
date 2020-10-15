<?php get_header(); ?>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
            <!-- Post Content -->
            <div class="postcontent nobottommargin clearfix">
	            <div class="single-post nobottommargin">
                    <?php get_template_part('includes/section', 'blog'); ?>
                </div>
            </div>
            <!-- Sidebar -->
	        <div class="sidebar nobottommargin col_last clearfix">
		        <div class="sidebar-widgets-wrap">
			        <div class="widget widget-twitter-feed clearfix">
                        fg
                    </div>
                </div>
                <div class="widget clearfix">
                <?php if(is_active_sidebar('sidebar-2')): ?>
                    <?php dynamic_sidebar('sidebar-2'); ?>
                <?php endif ?>   
			    </div>
            </div>
            
        </div>
    </div>
</section>
<?php get_footer(); ?>