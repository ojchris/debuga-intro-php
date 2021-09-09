<?php

$current_page_id = get_page_id();

function render_page($page_id = '404')
{
    $pages = [
        '404' => 'pages/404.php',
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

//function print_page_loop
function print_page_loop($page_id)
{
    $pages = [
        '404' => 'pages/404.php',
        'about' => 'pages/about.php',
        'home' => 'pages/home.php',
        'login' => 'pages/login.php'
    ];

    foreach ($pages as $key => $item) {
        if ($key == $page_id) {
            include $item;
            break;
        } else {
            continue;
        }
    }
}

//function print_page_array
function print_page_array($page_id)
{
    $pages = [
        '404' => 'pages/404.php',
        'about' => 'pages/about.php',
        'home' => 'pages/home.php',
        'login' => 'pages/login.php'
    ];

    include $pages[$page_id];
}
//function print_page_switch
function print_page_switch($page_id)
{
    $pages = [
        '404' => 'pages/404.php',
        'about' => 'pages/about.php',
        'home' => 'pages/home.php',
        'login' => 'pages/login.php'
    ];

    switch ($page_id) {
        case 'home':
            include $pages['home'];
            break;

        case 'about':
            include $pages['about'];
            break;

        case 'login':
            include $pages['login'];
            break;

        default:
            include $pages['404'];
    }
}



include 'functions.php';
get_header();
render_page($current_page_id);
print_page_loop($current_page_id);
print_page_array($current_page_id);
print_page_switch($current_page_id);
get_footer();
