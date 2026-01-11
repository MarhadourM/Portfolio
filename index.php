<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$page = $_GET['page'] ?? 'home';
require_once __DIR__ . '/templates/header.php';
// Router les pages
switch ($page) {
    case 'home':
        require 'pages/home.php';
        break;
    case 'contact':
        require 'pages/contact.php';
        break;
    case 'competences':
        require_once __DIR__ . '/pages/competences.php';
        break;
    case 'projets':
         require 'pages/projets.php';
        break;
    case 'parcours':
        require 'pages/parcours.php';
        break; 
    

    default:
        http_response_code(404);
        break;
}
require_once __DIR__ . '/templates/footer.php';
?>


