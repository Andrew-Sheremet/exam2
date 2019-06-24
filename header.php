<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="img/iconfinder_27_940975.png">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400|Lato:700|Roboto:400,300i,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="slick.css">
<link rel="stylesheet" href="slick-theme.css"> -->
<?php wp_head();?>
</head>
    <body>
   
<header class="header" id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-md-2 col-sm-1">
               
                <ul class="menu">
                    <li class="social"><a href="#"><img class="img"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Shape_1.png" alt=""></a></li>
                    <li class="social"><a href="#"><img class="img"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Shape_2.png" alt=""></a></li>
                    <li class="social"><a href="#"><img class="img"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Shape_3.png" alt=""></a></li>
                    <li class="social"><a href="#"><img class="img"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Shape_4.png" alt=""></a></li>
                  </ul>
                </div>
                <div class="col-xl-2 col-md-1 col-sm-1">
                <div class="header-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Layer_24.png" alt="">
                    <span class="header-title__subtitle">Backyard Landscaping</span>
                </div>
            </div>
        
            <div class="col-xl-6 col-md-3 col-sm-1">
           
                <div class="header-menu">
                <?php wp_nav_menu(array(
        'theme_location'  => 'top',
        'container'       => 'div', 
        'menu_class'      => 'header-menu', 
            )); ?>
                   
                </div>
            </div>
        </div>
    </div>
</header>