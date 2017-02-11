<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}


if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Footer',
        'before_widget' => '<div class="footer-content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
 

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Header Menu',
        'before_widget' => '<div class="header-menu">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

?>