<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

define('DB_HOST','127.0.0.1');
define('DB_NAME','20670_myband');
define('DB_USERNAME','20670_myband');
define('DB_PASSWORD','Myband');

//define('DB_HOST','localhost');
//define('DB_NAME','Myband');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','root');


define('NR_ITEMS_PER_PAGE',3);

?>