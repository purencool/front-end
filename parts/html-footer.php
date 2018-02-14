
</main>
<?php include  APP_PATH. DIRECTORY_SEPARATOR .'footer.php'; ?>
<?php include  APP_PATH. DIRECTORY_SEPARATOR .'js.php'; ?>
<?php
  if (!empty($jsArr)) {
   foreach ($jsArr as $jsArrValue) {
      echo '<link rel="stylesheet" href="'.$jsArrValue.'">';
    }
  }
?>
   </body>
</html>
