<?php

/**
 * This file generates a captcha string, writes it into the $_SESSION['captcha']
 * and renders a fresh captcha graphic file to the browser.
 *
 * In the views you can use this by saying:
 * <img src="tools/showCaptcha.php" />
 *
 * Check if the typed captcha is correct by saying:
 * if ($_POST["captcha"] == $_SESSION['captcha']) { ... } else { ... }
 */
require '../vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;

$builder->build();

session_start();

// write the captcha into a SESSION variable
$_SESSION['captcha'] = $builder->getPhrase();

// send http-header to prevent image caching (so we always see a fresh captcha image)
header('Content-type: image/png');
header('Pragma: no-cache');
header('Cache-Control: no-store, no-cache, proxy-revalidate');

$builder->output();

?>
