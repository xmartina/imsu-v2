<?php
require_once ('header.php');
require_once ('home.banner.outer.php');
require_once ('home.about.php');
require_once ('home.discover.more.php');
require_once ('home.how.study.php');
require_once('home.faculties.directorates.php');
require_once ('home.upcoming.events.php');
require_once ('home.campus.tour.php');
require_once ('home.testimonial.php');
require_once ('footer.php');


// Router


$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
        require_once ('index.php');
        break;

    case '/all-facultiess
    ':
        require_once('all.faculties.php');
        break;

    case '/views/authors':
        require __DIR__ . '/views/authors.php';
        break;

    case '/about':
        require __DIR__ . '/views/aboutus.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>