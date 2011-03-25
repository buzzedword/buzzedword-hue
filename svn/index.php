<?php
// Initialize page behaviors using query parameters
$action = (($_GET['modern'] == '1') ? true : false);
$transaction = (($_GET['page'] == '') ? 'home.php' : $_GET['page']);
$interaction = (($_GET['modal'] == 'off') ? false : true);
$time = round(microtime(), 3);

// Declare page globals
define('approot', './buzz-content/');
define('themes',  approot . 'plugin-themes/');
define('pages', approot . 'page/');

// Define interactions
define('html5', $action);
define('location', $transaction);

// Build webpage
require_once('engine.php');
require_once(approot . 'modules/content.php');
?>