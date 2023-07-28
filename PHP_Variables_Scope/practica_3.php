<?php
  /*
    La palabra clave "global" se utiliza para acceder a una variable global desde dentro de un funcion.

    Para hecer esto, use la palabra clave "global" antes de las variables(dentro de la funcion).
  */

  $x = 5;
  $y = 10;

  function myTest() {
    global $x, $y;
    $y = $x + $y;
  }

  myTest();
  echo $y;
?>