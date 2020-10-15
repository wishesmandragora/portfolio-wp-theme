<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full clearfix">
<?php
$counter = 1; //start counter
$grids = 2; //Grids per row
/* Make pagination with wp_query */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('post_type' => 'portfolio', 'posts_per_page' => 8, 'paged' => $paged );
query_posts($args);
$classes="";
if(have_posts()) :  while(have_posts()) :  the_post(); 
$portfolio_category = get_the_terms(get_the_ID(), 'skills');

  foreach($portfolio_category as $category) {
      $classes .= " pf-".$category->slug;
  }
?>
<?php
//Show the left hand side column
if($counter == 1) :
?>
    <div class="griditem <?php echo $classes; ?>">
        <div class="postimage">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('portfolio'); ?></a>
                </div>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </div>
<?php
//Show the right hand side column
elseif($counter == $grids) :
?>
            <div class="griditem">
                <div class="postimage">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('portfolio'); ?></a>
                </div>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </div>

<?php
$counter = 0;
endif;
?>
<?php
$counter++;
endwhile;

endif;
next_posts_link(); 
previous_posts_link(); 
?>
</div>