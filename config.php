<?php
  try {
    $pdo = new PDO("mysql:dbname=projeto_reservas;host=localhost", "admin", "admin@12");
  } catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
  }
?>
