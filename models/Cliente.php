<?php
  require_once 'models/ModeloBase.php';
  require_once 'controllers/ErrorController.php';

  class Cliente extends ModeloBase
  {
    public function guardarClientes()# Guarda clientes en la base de datos
    {
      # Constructor del modelo base
      $conexion = new ModeloBase();
      # Para acceder a la variable publica que contiene la conexión se usa:
      # $conexion->db;

      # Guardando los POST con seguridad en una variable
      $nombre = mysqli_real_escape_string( $conexion->db, trim( $_POST['nombre'] ) );
      $razon_social = mysqli_real_escape_string( $conexion->db, trim( $_POST['razon_social'] ) );
      $rtn = mysqli_real_escape_string( $conexion->db, trim( $_POST['rtn'] ) );
      $email1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['email1'] ) );
      $email2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['email2'] ) );
      $email3 = mysqli_real_escape_string( $conexion->db, trim( $_POST['email3'] ) );
      $celular1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['celular1'] ) );
      $celular2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['celular2'] ) );
      $telefono1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['telefono1'] ) );
      $telefono2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['telefono2'] ) );
      $r_legal = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal'] ) );
      $r_legal_identidad = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_identidad'] ) );
      $r_legal_celular1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_celular1'] ) );
      $r_legal_celular2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_celular2'] ) );
      $r_legal_correo1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_email1'] ) );
      $r_legal_correo2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_email2'] ) );

      # Consulta que será ejecutada en Mysqli
      $query = "INSERT INTO clientes VALUES(
        NULL,
        '$nombre',
        '$razon_social',
        '$rtn',
        '$email1',
        '$email2',
        '$email3',
        '$celular1',
        '$celular2',
        '$telefono1',
        '$telefono2',
        '$r_legal',
        '$r_legal_identidad',
        '$r_legal_celular1',
        '$r_legal_celular2',
        '$r_legal_correo1',
        '$r_legal_correo2'
      );";

      # Verificando si existen datos iguales en la base de datos para luego ejecutar la consulta
      return $conexion->verificarDuplicados( 'clientes', 'razon_social', 'rtn', $razon_social, $rtn, $query );
    }

    public function eliminarClientes( $valorDelPost )# Elimina clientes de la base de datos
    {
      # Constructor del modelo base
      $conexion = new ModeloBase();

      # Creando y ejecutando la consulta que borra clientes
      $consulta = "DELETE FROM clientes WHERE rtn = '$valorDelPost';";
      $ejecutando_consulta = mysqli_query( $conexion->db, $consulta );

      return $ejecutando_consulta;
    }

    public function actualizarClientes()# Actualiza clientes de la base de datos
    {
      # Constructor del Modelo Base
      $conexion = new ModeloBase();
      # Para acceder a la variable publica que contiene la conexión se usa:
      # $conexion->db;

      # Guardando los POST con seguridad en una variable
      $id = mysqli_real_escape_string( $conexion->db, trim( $_POST['id_capturada'] ) );
      $nombre = mysqli_real_escape_string( $conexion->db, trim( $_POST['nombre'] ) );
      $razon_social = mysqli_real_escape_string( $conexion->db, trim( $_POST['razon_social'] ) );
      $rtn = mysqli_real_escape_string( $conexion->db, trim( $_POST['rtn'] ) );
      $email1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['email1'] ) );
      $email2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['email2'] ) );
      $email3 = mysqli_real_escape_string( $conexion->db, trim( $_POST['email3'] ) );
      $celular1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['celular1'] ) );
      $celular2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['celular2'] ) );
      $telefono1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['telefono1'] ) );
      $telefono2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['telefono2'] ) );
      $r_legal = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal'] ) );
      $r_legal_identidad = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_identidad'] ) );
      $r_legal_celular1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_celular1'] ) );
      $r_legal_celular2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_celular2'] ) );
      $r_legal_email1 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_email1'] ) );
      $r_legal_email2 = mysqli_real_escape_string( $conexion->db, trim( $_POST['r_legal_email2'] ) );

      # Consulta que actualiza al cliente
      $query = "UPDATE clientes
        SET
          nombre = '$nombre',
          razon_social = '$razon_social',
          rtn = '$rtn',
          email1 = '$email1',
          email2 = '$email2',
          email3 = '$email3',
          celular1 = '$celular1',
          celular2 = '$celular2',
          telefono1 = '$telefono1',
          telefono2 = '$telefono2',
          r_legal = '$r_legal',
          r_legal_identidad = '$r_legal_identidad',
          r_legal_celular1 = '$r_legal_celular1',
          r_legal_celular2 = '$r_legal_celular2',
          r_legal_email1 = '$r_legal_email1',
          r_legal_email2 = '$r_legal_email2'
        WHERE
          id = '$id'
      ;";

      # Aqui no vamos a verificar duplicados porque la persona que quiera actualizar tendrá que poner un código de ingreso a futuro
      $ejecutando_consulta = mysqli_query( $conexion->db, $query );
      return $ejecutando_consulta;
    }

    public function mostrarClientes()# Muestra todos los clientes registrados
    {
      # Usando el constructor del Modelo Base
      $ModeloBase = new ModeloBase();
      return $showAll = ModeloBase::mostrarTabla('clientes');
      // $ModeloBase->mostrarTodos('clientes');
    }
  }
?>