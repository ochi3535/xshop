<?php
  session_start();  //セッション変数を使うファイルの」先頭に書く
  require '../header.php';
  echo $_SESSION['abcd'];

  ?>
