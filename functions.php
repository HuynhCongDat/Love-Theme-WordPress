<?php

function theme_settup(){
    register_nav_menu('top_menu',__( 'Menu Chinhs' ));
    add_theme_support('post-thumbnails');

}
add_action('init', 'theme_settup');