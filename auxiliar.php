<?php

function filtrar_edad(string $par,array &$error):?string
{
   $val = null;
   
    if(isset($_GET["fecha"])):


        $val = trim($_GET[$par]);       

    endif;

 return $val;
}
  
function fecha(string $fecha){

    $x  = explode("-",$fecha);



}

