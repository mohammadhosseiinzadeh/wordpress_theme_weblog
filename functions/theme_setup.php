<?php
    function theme_setup(){
        add_theme_support('title-tag'); 
        add_theme_support('widgets'); 
        add_theme_support('post-thumbnails'); 
        add_theme_support('custom-logo'); 
        register_nav_menus(array(
            'Main_Menu'=>' 0لوکیشن: هدر',
            'ّone'=>' لوکیشن: ستون 1',
            'ّtwo'=>' لوکیشن: ستون 2',
            'ّthree'=>' لوکیشن: ستون 3'
        ) );
    }
    add_action("after_setup_theme", "theme_setup" );
?>