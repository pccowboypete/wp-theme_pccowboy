<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php single_post_title(); single_cat_title(); echo ' - '. XWP_Util::get_the_meta_description_by_id(get_the_ID()); ?>">
	<meta name="keywords" 
 	content="<?php single_post_title(); single_cat_title(); echo ', '; XWP_Util::get_the_tags(); ?>">
	<meta name="robots" content="index, follow">
    
    <!-- Page Icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Sriracha" rel="stylesheet"> <!-- font 2 and 3 -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> <!-- font 4 -->
	
    
    <title><?php bloginfo('name'); ?><?php echo ' - ';single_post_title(); single_cat_title(); ?></title>
	<?php wp_head(); ?>

</head> 

<body id="page-top" <?php body_class('index'); ?>>
    <div id="main-container" style="display : none;">
    
	<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" id="top-bar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo home_url(); ?>#page-top">
                    <span class="site-caption">Welcome to <span class="site-name"><?php bloginfo('name'); ?>!</span></span>
                    <br><span class="debug"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="top-bar">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <?php echo XWP_MenuHTMLHelper::get_nav_menu_for_frontpage('topbar-home', 0, false, false)?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	

    <!-- Header -->
    <header class="anchor_highlight" id="page-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive site-header-logo" src="<?php echo get_template_directory_uri(); ?>/imgs/pccowboy.png" alt="PcCowboy - Peter Nanayon">
                    <div class="intro-text">
                         
                        <span class="skills"><?php bloginfo('description'); ?></span> 
                        
                    </div>
                </div>
            </div>
        </div>
    </header>