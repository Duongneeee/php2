<?php


$ctr = $_GET['ctr'] ?? '';

switch ($ctr) {
    case '':
        case 'home':
            include "views/home.php";
            break;
    case 'about':
        include "views/about.php";
        break;
    case 'contact':
        include "views/contact.php";
        break;
}


