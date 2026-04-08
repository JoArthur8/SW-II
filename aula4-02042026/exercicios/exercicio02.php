<?php

$JSON = file_get_contents("usuarios.json");

$usuariosArr = json_decode($JSON, true);

$usuarios = $usuariosArr["usuarios"];


foreach ($usuarios as $u ) {
   foreach ($u as $key => $value) {
      if($key != "id"){
         echo $key . " : " . $value . "<br/>";
      }
      
   }
   echo "<br>";
}
?>