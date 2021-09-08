<?php

$current_page_id = get_page_id();

function render_page($page_id = '404')
{
    $pages = [
        '4040' => 'pages/404.php',
        'about' => 'pages/about.php',
        'home' => 'pages/home.php',
        'login' => 'pages/login.php'
    ];

    if (array_key_exists($page_id, $pages)) {
        include $pages[$page_id];
    } else {
        include $pages['404'];
    }
}

function get_page_id()
{
    if (array_key_exists('page', $_GET)) {
        return $_GET['page'];
    } else {
        return 'home';
    }
}

include 'functions.php';
get_header();
render_page($current_page_id);
get_footer();
