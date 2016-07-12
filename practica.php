<?php
  $entrada = "este texto tiene muchos caracteres para ser un titulo";

  $contador =  strlen($entrada);

  if($contador <= 20){
    print $entrada;
  }
  else if($contador >= 21){
    echo "el texto: $entrada tiene $contador";
  }
    else{
    echo "error: no funcionan las condicionales  del if :v";
  }

?>
