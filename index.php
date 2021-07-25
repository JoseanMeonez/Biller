<?php
  require_once 'autoload.php';  // Autocargando clases de los controllers
  require_once 'config/app.php'; // Parametros de configuración
  require_once 'models/modeloBase.php'; // Modelo base del proyecto
  require_once 'views/layout/head.php'; // Layout del head y demás metadatos
  require_once 'views/layout/navbar.php'; // Layout del navbar
  require_once 'views/layout/sidebar.php'; // Layout del sidebar

  // Constructor y conexión a la base de datos
  $Database = new Database();
  $Database->conectar();

  // Constructor de la clase Controladora de Errores
  $ErrorController = new ErrorController();

  // Comprobando existencia del controlador
  if ( isset( $_GET['controller'] ) )
  {
    // Guardando los controladores de la url en $nombre_controlador
    $nombre_controlador = $_GET['controller'].'Controller';

  }
  elseif ( !isset( $_GET['controller'] ) && !isset( $_GET['action'] ) )
  {
    // Dandole un controlador por defecto al $nombre_controlador
    $nombre_controlador = controller_default;
  }
  else
  {
    // Mensaje de error
    $ErrorController->hubo_problema();
  }

  // Comprobando que la clase guardada en $nombre_controlador realmente exista
  if ( class_exists( $nombre_controlador ) )
  {
    // Activando el constructor de la clase del controlador
    $controlador = new $nombre_controlador();

    // Comprobando si se esta enviando un metodo por la url y su existencia
    if ( isset( $_GET['action'] ) && method_exists( $controlador, $_GET['action'] ) )
    {
      require_once 'views/layout/navbar.php'; // Layout del navbar
      require_once 'views/layout/sidebar.php'; // Layout del sidebar
      // Guardando en $action el metodo enviado por la url
      $action = $_GET['action'];
      $controlador->$action(); // <- Usando dicho metodo que pertenece a la clase del controlador
    }
    elseif ( !isset( $_GET['controller'] ) && !isset( $_GET['action'] ) )
    {
      // Guardando un metodo por defecto en $action_default si es que no existe un controlador ni su metodo enviado por la url
      $action_default = action_default;
      $controlador->$action_default();
    }
    else
    {
      // Mensaje de error
      $ErrorController->hubo_problema();
    }
  }
  else
  {
    //Mensaje de error
    $ErrorController->no_existe();
  }

?>