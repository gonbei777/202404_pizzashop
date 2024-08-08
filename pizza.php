<?php

try {
  $dsn = 'mysql:host=localhost;dbname=pizza_interplan;charset=utf8';
  $user = 'pizzataro';
  $pass = 'Q62W.Khl5b)4]8-k';
  $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  $db = new PDO($dsn, $user, $pass, $option);
} catch (PDOException $e) {
  var_dump($e->errorInfo);
}


require './templates/header.php';
// include './templates/header.php';
?>

<main></main>

<?php
require './templates/footer.php';
?>