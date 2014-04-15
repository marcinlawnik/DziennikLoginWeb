<?php

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once(dirname(__FILE__).'/../libraries/password_compatibility_library.php');
}
// include the config
    require dirname(__FILE__).'/../config/config.php';


// include the PHPMailer library
require_once(dirname(__FILE__).'/../libraries/PHPMailer.php');
    require dirname(__FILE__).'/../classes/graphReportGenerator.php';
// load the login class
require_once(dirname(__FILE__).'/../classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    $chartGenerator = new graphReportGenerator(DB_HOST, DB_NAME2, DB_USER2, DB_PASS2);
    $chartGenerator->setUserId($_SESSION['user_id']);
    $chartGenerator->getCurrentTrimester();
    $chartGenerator->getSubjectsArray();
    $chartGenerator->executeProcessing();
} else {
    header('Location: http://dl.lawniczak.me/login.php');
}