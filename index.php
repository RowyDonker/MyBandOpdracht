<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/databaseOnline.php';
//include 'includes/databaseOnline.php';

include 'includes/func.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Mr.Spoopy');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display("nav.tpl");

$action= isset($_GET['action'])?$_GET['action']:'home';

$page_nr = isset($_GET['page_nr']);



switch ($action) {
    case 'home':
        
       $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        

// Get newsarticles from database
include('model/select_newsarticles.php');
include('model/get_nr_newsarticles.php');
$templateParser->assign('result',$result);
$templateParser->display('newsarticles.tpl');
        
        break;
        
case 'Verhalen':
       $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:3;
        
     // Get verhalen from database        
include('model/select_verhalen.php');
$templateParser->assign('result2',$result2);
$templateParser->display('verhalen.tpl');
        
 
    break;
    case 'search';
    
    $templateParser->display('search.tpl');  
    
    break;
    case 'about':
        
$templateParser->display('about.tpl');
               $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:2;

echo "<br>";
break;
}
$templateParser->assign('footer', 'Copyright © 2016 Mr.Spoopy. All rights reserved.');



$templateParser->display('footer.tpl');

?>