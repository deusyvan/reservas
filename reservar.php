<?php
  require 'config.php';
  require 'classes/reservas.class.php';
  require 'classes/carros.class.php';
  
  $reservas = new Reservas($pdo);
  $carros = new Carros($pdo);
  
 ?>
 <h1>Adicionar Reserva</h1>
 <form method="POST">
 	Carro: </br>
 	<select name="carro">
 	
 	</select><br><br>
 
 	Data de Início: <br/>
 	<input type="text" name="data_inicio"/></br></br>
 	
 	Data de fim:<br/>
 	<input type="text" name="data_fim"/></br></br>
 	
 	Nome da pessoa:<br/>
 	<input type="text" name="pessoa"/></br></br>
 	
 	<input type="submit" value="Reservar"/>
 	
 </form>
