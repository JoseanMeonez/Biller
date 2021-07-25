<?php

  class ErrorController
  {
    public function no_existe()
    {
      return require_once 'views/error/no_existe.php';
    }

    public function no_disponible()
    {
      return require_once 'views/error/no_disponible.php';
    }

    public function sin_derechos()
    {
      return require_once 'views/error/sin_derechos.php';
    }

    public function hubo_problema()
    {
      return require_once 'views/error/hubo_problema.php';
    }

    public function ya_existen_datos()
    {
      return require_once 'views/error/ya_existen_datos.php';
    }

    public function sin_registros()
    {
      return require_once 'views/error/sin_registros.php';
    }
  }