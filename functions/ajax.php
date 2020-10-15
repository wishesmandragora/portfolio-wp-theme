<?php 

function filter_ajax() {

    
    $category = $_POST['category'];
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );
    if(isset($category)) {
        $args['category__in'] = array($category);
    }

    $query = new WP_Query($args);
    
    if( $query->have_posts() ):while( $query->have_posts() ):$query->the_post();
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
 <?php endwhile;endif; wp_reset_query(); 
 
die();
}
add_action('wp_ajax_filter', 'filter_ajax');
add_action('wp_ajax_nopriv_filter', 'filter_ajax');



//Search Form
// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => 5, 'post_type' => 'post' ) );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>

        <?php endwhile;
        wp_reset_postdata();  
    else: 
        echo '<h3>No Results Found</h3>';
    endif;
        die();
    }

    // add the ajax fetch js
    add_action( 'wp_footer', 'ajax_fetch' );
    function ajax_fetch() {
    ?>
    <script type="text/javascript">
    function fetchResults(){
        var keyword = jQuery('#searchInput').val();
        if(keyword == ""){
            jQuery('#datafetch').html("");
        } else {
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: { action: 'data_fetch', keyword: keyword  },
                success: function(data) {
                    jQuery('#posts').html( data );
                }
            });
        }

    }
    </script>

    <?php
    }