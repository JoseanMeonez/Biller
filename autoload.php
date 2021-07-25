<?php
  // Metodo que autocarga las clases de los controladores en el index
  function controllers_autoload($classname)
  {
    include 'controllers/'.$classname.'.php';
  }

  spl_autoload_register('controllers_autoload');
?>