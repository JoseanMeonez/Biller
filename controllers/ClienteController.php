<?php
  require_once 'models/Cliente.php';
  require_once 'controllers/ErrorController.php';

  class ClienteController extends Cliente
  {
    public function registrar()
    {
      # Cargando vista principal y formulario
      return require_once 'views/clientes/agregar.php';
    }

    public function guardar()
    {
      # Constructor del Modelo de Clientes
      $Cliente = new Cliente();
      # Verificando si esta definida o vacía $_POST
      if ( isset( $_POST ) and !empty( $_POST ) )
      {
        # Guardando cliente
        return $Cliente->guardarClientes();
      }
      elseif ( !isset( $_POST ) or empty( $_POST ) )
      {
        # Mostrando un error con la función static del Modelo Base
        return $Cliente->ErrorController('no_existe');
      }
      else
      {
        # Mostrando un error con la función static del Modelo Base
        return $Cliente->ErrorController('hubo_problema');
      }
    }

    public function eliminar()
    {
      # Constructor del Modelo de Clientes
      $Cliente = new Cliente();

      if ( isset( $_POST['razon_social'] ) and !empty( $_POST['razon_social'] ) and isset( $_POST['rtn'] ) and !empty( $_POST['rtn'] ) )
      {
        # Cargando un vista para confirmar el borrado del cliente
        return require_once 'views/clientes/confirmacion.php';
      }
      elseif ( isset( $_POST['razon_social_capturada'] ) and !empty( $_POST['razon_social_capturada'] ) or isset( $_POST['rtn_capturado'] ) and !empty( $_POST['rtn_capturado'] ) )
      {
        # Eliminando el Cliente
        $Cliente->eliminarClientes( $_POST['rtn_capturado'] );

        # Feedback de completado
        return require_once 'views/feedback/completado.php';
       }
      else
      {
        # Mostrando un error con la función static del Modelo Base
        return $Cliente->ErrorController('hubo_problema');
      }
    }

    public function actualizar()
    {
      # Constructor del Modelo de Clientes
      $Cliente = new Cliente();

      # Asegurando que exista un dato enviado por POST
      if ( isset( $_POST ) and !empty( $_POST ) )
      {
        # Veriicando si el formulario para actualiza ya se llenó
        if ( isset( $_POST['id_capturada'] ) and !empty( $_POST['id_capturada'] ) )
        {
          $Cliente->actualizarClientes();
          return require_once 'views/feedback/completado.php';
        }

        return require_once 'views/clientes/actualizar.php';
      }
      elseif ( !isset( $_POST ) or empty( $_POST ) )
      {
        return $Cliente->ErrorController('no_existe');
      }
      else
      {
        return $Cliente->ErrorController('hubo_problema');
      }
    }

    public function mostrarTodos()
    {
      # Constructor del Modelo de Clientes
      $Cliente = new Cliente();
      # Verificando si existen registros y mostrandolos en pantalla
      return $Cliente->mostrarClientes();
    }
  }