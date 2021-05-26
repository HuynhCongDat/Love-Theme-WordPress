<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/6e4540c13e.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/mobile.css">
    
    <title>Front-end</title>
</head>
<body>

    <header>
        <nav class="top-nav">
           <div class="logo">
               <div class="logo__img">
                   <img src="<?php bloginfo('template_directory'); ?>/images/logo_psd.png" alt="logo image">
               </div>
           </div>
           <div class="menu">
            <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'top_menu', 
                        'container' => 'false', 
                        'menu_id' => 'top-menu', 
                        'menu_class' => 'top-menu'
                    ) 
                ); ?>
               
               <div class="cancel">
                   <i class="fas fa-times"></i>
               </div>
           </div>
           <div class="mobile-menu">
               <i class="fas fa-bars"></i>
           </div>
           <div class="search">
               <i class="fas fa-search"></i>
               <div class="search__box">
                   <form action="" method="GET" role="form">
                        <input type="text" placeholder="Search..." class="search__input">
                   </form>
                   
               </div>
           </div> 
           <div class="cart">
               <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <div class="cart__item">
                        <span>3</span>
                    </div>
               </a>
           </div>
           
        </nav>
    </header>
    <?php if(is_home() || is_front_page()){ ?>
        
    <?php }else { ?>
        <?php get_template_part('breadcrumb');?>
    <?php }?>
     
        
   