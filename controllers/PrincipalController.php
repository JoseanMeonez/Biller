<?php
  class PrincipalController
  {
    public function index()# Muestra la pagina principal
    {
      return require_once 'views/index.php';
    }

    public function clientes()# Muestra el menu de clientes
    {
      return require_once 'views/clientes.php';
    }

    public function usuarios()# Muestra el menu de usuarios
    {
      return require_once 'views/usuarios.php';
    }

    public function login()# Muestra la pagina de login al no haber una sesión activa
    {
      return require_once 'views/layout/login.php';
    }
  }