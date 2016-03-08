<?php

    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
            'name' => 'Footer',
            'id' => "sidebar-footer",
            'before_widget' => '<div id="footer">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )); 
    };      

?>
