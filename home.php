<?php get_header();  ?>
<section id="content">
    <div class="content-wrap">
        <div class="container">
        <?php
            $categorylist = get_categories( array(
                'orderby' => 'name',
                'parent'  => 0
            ) ); 
            
        ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" id="searchForm">
                    <input type="text" name="s" placeholder="Type something here" class="form-control" id="searchInput" onkeyup="fetchResults()" value="<?php echo get_search_query(); ?>">
                </form>
            </div>
        
        <div class="col-lg-6">
            <div class="categories">
            <?php foreach ( $categorylist as $ctg) : ?>
            <!-- <li data-categories="<?php echo $ctg->term_id; ?>"><a href="<?php echo get_category_link( $ctg->term_id ); ?>"><?php echo $ctg->name; ?></a></li><br /> -->
            <li class="category-btn" data-categories="<?php echo $ctg->term_id; ?>"><a href="javascript:void(0);"><?php echo $ctg->name; ?></a></li><br />
            <?php endforeach ?>
            </div>
        </div>
        </div>
        </div>
            <div id="posts" class="small-thumbs"> 
                
                <?php get_template_part('includes/section', 'archive'); ?>

                <?php previous_posts_link(); ?>

                <?php next_posts_link(); ?>

                <?php wp_link_pages();  ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer();  ?>
<script>
    (function($) {
        
        $( document ).ready(function() {
            $('.category-btn' ).on('click', function(e) {
                e.preventDefault();
                var category = $(this).data('categories');
                console.log(category);
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'post', 
                    data: {
                        action: 'filter',
                        category: category
                    },
                    success: function(result) {
                        $('#posts').html(result);
                    }
                });
            }); 
            
        })

    })(jQuery); 
</script>