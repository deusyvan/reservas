<?php
  require 'config.php';
  require 'classes/carros.class.php';
  require 'classes/reservas.class.php';

  $reservas = new Reservas($pdo);
  $carros = new Carros($pdo);

?>
<h1>Reservas</h1>
<?php
$lista = $reservas->getReservas();

foreach($lista as $item) {
  echo $item['pessoa'].' reservou o carro '.$item['id_carro'].' entre '.$data1.' e '.$data2.'<br/>';
}
