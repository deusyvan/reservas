<?php
  try {
    $pdo = new PDO("mysql:dbname=projeto_reserva;host=localhost", "admin", "admin");
  } catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
  }
?>
