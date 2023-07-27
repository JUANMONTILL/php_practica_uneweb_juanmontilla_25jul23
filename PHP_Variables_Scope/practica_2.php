<?php
  /*
    Una variable declarada dentro de una funcion tiene un ÁMBITO LOCAL y solo se puede acceder dentro de esa funcion.
  */

  // Variable con alcance local:

  function myTest() {
    $x = 5; // Alcance local o local scope
    echo "<p> La variable x dentro de la funcion es: $x</p>";
  }

  myTest();

  //Usar la variable x fuera de la funcion generara un error
  echo "<p> La variable x fuera de la funcion es: $x</p>";
?>