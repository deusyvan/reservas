<?php
  require 'config.php';
  require 'classes/carros.class.php';
  require 'classes/reservas.class.php';

  $reservas = new Reservas($pdo);
  $carros = new Carros($pdo);

?>
<h1>Reservas</h1>
