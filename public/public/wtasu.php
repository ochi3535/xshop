<?php
  session_start();
  $_SESSION['abcd'] =  "セッションに保存";

  echo $_SESSION['abcd'];

  ?>
