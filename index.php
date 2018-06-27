<?php
  require 'config.php';
  require 'classes/carros.class.php';
  require 'classes/reservas.class.php';

  $reservas = new Reservas($pdo);


?>
<h1>Reservas</h1>
