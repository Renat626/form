<?php
  require 'db.php';
  $userName = $_POST['userName'];
  $userPhone = $_POST['userPhone'];

  if (empty($userName) || empty($userPhone)) {
    header('location: ../../index.php');
  } else {
    $sql = "INSERT INTO users (nameOfUser, numberOfPhone) VALUES (:nameOfUser, :numberOfPhone)";
    $stmt = $pdo->prepare($sql);
    $params = [':nameOfUser' => $userName,
               ':numberOfPhone' => $userPhone];
    $stmt->execute($params);

    header('location: ../../index.php');
  }
?>
