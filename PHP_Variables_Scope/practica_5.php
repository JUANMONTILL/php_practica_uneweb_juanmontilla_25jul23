<?php
  /*
    PHP la palabra clave static

    Normalmente, cuando se completa/ejecuta una funcion, se elimina todas sus variables. Sin embargo, a veces que NO se elimine una variable.

    Para que no se borren usamos la palabra clave "static"
  */

  function myTest() {
    static $x = 0;
    echo $x . "<br>";
    $x++;
  }

  myTest();
  myTest();
  myTest();

  /*
    Entonces, cada vez que se llame a la funcion , esa variable aun tendra la informacion que contenia desde la ultima vez que se llamo la funcion.

    Nota: La variable sigue siendo local para la funcion.
  */
?>