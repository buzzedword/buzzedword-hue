<?php ((location == "contact.php") ? require_once(approot . 'modules/mail.php') : false ); ?>
<?php echo $mode; ?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
  <head>
<?php 
echo $name;
require_once('style.php');
require_once('meta.php'); 
?>
  </head>
  <body>
  