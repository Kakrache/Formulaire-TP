<?php
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $bdd = new PDO('mysql: host=localhost;port=3308;dbname=mon_mini_chat', 'root', '');
 ?>
