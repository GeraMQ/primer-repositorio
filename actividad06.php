<?php
   echo "<P>Reto Número 6<P>";
   $ropa = array("Camisa", 
       "Pantalón","Cinturon");

   sort($ropa);
   foreach($ropa as $elemento){
      echo $elemento . " <BR>";
   }

   array_push($ropa, "Gorra");
   array_push($ropa, "Calcetines");
   echo "<p>Ropa en forma descendente<P>";
   
   rsort($ropa);
   foreach($ropa as $elemento){
      echo $elemento . " <BR>";
   }
?>