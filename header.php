<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" >
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Document Title-->
	<title><?php echo get_bloginfo( 'name' ); ?></title>
<?php wp_head();
?>
</head>

<body class="stretched">
<div id="wrapper" class="clearfix">
    <!-- Header-->
	<header id="header" class="full-header">
        <div id="header-wrap">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id );
                ?>
                <div id="logo">
                    <a href="<?php ?>" class="standard-logo" data-dark-logo="<?php echo $image[0]; ?>">
                    <img src="<?php echo $image[0]; ?>" style="width:76; padding-left:20px;"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="<?php get_template_directory() . '/images/logo-dark@2x.png' ?>">
                    <img src="<?php get_template_directory() . '/assets/images/logo-dark@2x.png' ?>"></a>
				</div> 
            <!-- Primary Navigation -->
                    <nav id="primary-menu">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'container' => 'ul',
                                )
                            );
                        ?>
				    </nav><!-- #primary-menu end -->
				</div>
		</header><!-- #header end -->