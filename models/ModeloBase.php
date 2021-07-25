<?php
  require_once 'config/database.php';
  require_once 'controllers/ErrorController.php';

  class ModeloBase extends Database
  {
    public $db;

    public function __construct()# Contiene la conexión a la base de datos.
    {
      $this->db = Database::conectar();
      return $this->db;
    }

    public static function ErrorController( $error )# Usa el metodo constructor de la clase ErrorController y dispara un error según el nombre del error que le demos como argumento.
    {
      $ErrorController = new ErrorController();
      return $ErrorController->$error();
    }

    protected function verificarDuplicados( $tabla, $columna1, $columna2, $varComparando1, $varComparando2, $query )# Verifica la existencia de valores en la base de datos según sus parametros y ejecuta una consulta
    {
      $consulta = "SELECT $columna1, $columna2 FROM $tabla WHERE $columna1 = '$varComparando1' OR $columna2 = '$varComparando2';";
      $ejecutandoConsulta = mysqli_query( $this->db, $consulta );

      # Verificando si los datos de la consulta anterior están duplicados
      $duplicado = mysqli_num_rows( $ejecutandoConsulta );

      if ( !empty( $ejecutandoConsulta ) and $duplicado == 0 )
      {
        # Ejecutando la $query dada como argumento en la base de datos
        mysqli_query( $this->db, $query );
        return require_once 'views/feedback/completado.php';
      }
      elseif ( $duplicado > 0 )
      {
        # Mostrando un error si los datos estan duplicados
        return $this->ErrorController('ya_existen_datos');
      }
      else
      {
        # Mostrando un error
        return $this->ErrorController('hubo_problema');
      }
    }

    protected function mostrarTabla( $tabla )# Muestra todo lo que se encuentre en una tabla
    {
      # Cuenta Filas verifica si existen o no datos en la tabla de los clientes
      $consulta = mysqli_query( $this->db, "SELECT * FROM $tabla;" );
      $cuentaFilas = mysqli_num_rows( $consulta );
      $id = 1;

      # Verificando que la consulta devuelva un resultado y comprobando que existan filas en la tabla
      if ( !empty( $consulta ) and $cuentaFilas > 0 )
      {
        # Mostrando la vista
        return require_once "views/$tabla/mostrarTodos.php";
      }
      else
      {
        # Mostrando un error
        return $this->ErrorController('sin_registros');
      }
    }
  }
?>