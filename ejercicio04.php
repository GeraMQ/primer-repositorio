<?php
    echo "<p>Reto 1<p>";
    $inicio = 1;
    for ($i=2; $i<=20; $i+=2){
      echo $i;
      if ($i != 20) echo ", ";
    }

    echo "<P>Reto 2<P>";
    $inicio = 2;
    while ($inicio <=20){
      echo $inicio;
      if ($inicio != 20) echo ", ";
      $inicio += 2;
    }

    echo "<P>Reto 3<P>";
    $inicio = 2;
    do {
      echo $inicio;
      if ($inicio != 20) echo ", ";
      $inicio +=2;
    } while($inicio <=20);
?>