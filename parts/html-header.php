<?php define('APP_PATH', dirname(__FILE__));?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Home</title>
    <?php include APP_PATH. DIRECTORY_SEPARATOR .'head.php'; ?>
    <?php
       if (!empty($cssArr)) {
            foreach ($cssArr as $cssArrValue) {
              echo '<link rel="stylesheet" href="'.$cssArrValue.'">';
           }
        }
    ?>
  </head>
  <body>
    <?php include APP_PATH. DIRECTORY_SEPARATOR .'navigation.php'; ?>
  <main>
