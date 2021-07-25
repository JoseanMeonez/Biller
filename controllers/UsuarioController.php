<?php
  require_once 'models/Usuario.php';

  class UsuarioController extends Usuario
  {
    public function iniciarSesion()
    {
      $ErrorController = new ErrorController();

      if ( isset( $_POST['user'] ) && isset( $_POST['password'] ) )
      {
        require_once 'views/usuarios.php'; 
      }
      elseif( isset( $_POST ) or empty( $_POST ) )
      {
        return $ErrorController->no_existe();
      }
    }

    public function registro()
    {

    }

    public function guardar()
    {

    }

    public function eliminar()
    {

    }

    public function actualizar()
    {

    }

    public function mostrarTodos()
    {

    }
  }