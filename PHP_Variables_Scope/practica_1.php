<?php
  /* 
    En PHP, las variables se pueden declarar en cualquier parte de script.

    El alcance de una variable es la parte del script donde se puede hacer referencia/ utilizar la variable.

    PHP tiene tres ambitos de variables diferentes:

        -local
        -global
        -estatico
    
    Alcance global y local

    Una variable declarada fuera de una funcion tiene un ALCANCE GLOBAL y solo se puede acceder fuera de una funcion.

    Variable con alcance global:
  */

  $x = 5;
  
  function myTest() {
    // Usando x dentro de esta funcion generaremos un error
    echo "<p>La variable x dentro de la funcion: $x</p>";
  }

  myTest();

  echo "<p>La variable x fuera de la funcion es: $x</p>";
?>