<?php get_header();  ?>
<!-- Page Title-->
<section id="page-title">
	<div class="container clearfix">
		<h1>Portfolio</h1>
            <span>Showcase of Our Awesome Works in 4 Columns</span>
	</div>
</section><!-- #page-title end -->
<?php
    $args = array(                 
		'taxonomy' => 'skills',
		'hide_empty' => true
	); 
	$termlist = get_terms( $args ); 
	?>
	<div class="container clearfix" style="margin-top: 1rem;">
	<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">
	   <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
		<?php
    foreach ($termlist as $item) :   
	?> 

        <li><a href="#" data-filter=".pf-<?php echo $item->slug; ?>"><?php echo $item->name; ?></a></li>


	<?php endforeach; ?> 
	</ul>
	</div>
<!-- Content -->
	<section id="content">
		<div class="content-wrap nobottompadding">
		<div  class="container">
            <?php get_template_part('includes/section', 'portfolio'); ?>
		</div>
		</div>
	</section>
<?php get_footer();  ?>