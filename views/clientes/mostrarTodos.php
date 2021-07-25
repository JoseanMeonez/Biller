<br><br><br>
<h1 class="caption-top text-center">Lista de Clientes</h1>
<div class="table-responsive">
  <table class="table align-middle table-bordered">
    <thead>
      <tr class="table-primary align-middle text-center text-white border-primary">
        <th class="bg-primary" scope="col">Id</th>
        <th class="bg-primary" scope="col">Nombre</th>
        <th class="bg-primary" scope="col">Razón Social</th>
        <th class="bg-primary" scope="col">RTN</th>
        <th class="bg-primary" scope="col">Email 1</th>
        <th class="bg-primary" scope="col">Email 2</th>
        <th class="bg-primary" scope="col">Email 3</th>
        <th class="bg-primary" scope="col">Celular 1</th>
        <th class="bg-primary" scope="col">Celular 2</th>
        <th class="bg-primary" scope="col">Teléfono 1</th>
        <th class="bg-primary" scope="col">Teléfono 2</th>
        <th class="bg-primary" scope="col">Representante legal</th>
        <th class="bg-primary" scope="col">RTN del Representante</th>
        <th class="bg-primary" scope="col">Celular 1 del Representante</th>
        <th class="bg-primary" scope="col">Celular 2 del Representante</th>
        <th class="bg-primary" scope="col">Email 1 del Representante</th>
        <th class="bg-primary" scope="col">Email 2 del Representante</th>
        <th class="bg-primary" scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Listando los registros de Clientes -->
      <?php while ( !empty( $cuentaFilas ) and $filas = mysqli_fetch_array( $consulta ) ) : ?>
        <tr class="text-center">
          <td><?= $id++ ?></td>
          <td><?= $filas['nombre'] ?></td>
          <td><?= $filas['razon_social'] ?></td>
          <td><?= $filas['rtn'] ?></td>
          <td><?= $filas['email1'] ?></td>
          <td><?= $filas['email2'] ?></td>
          <td><?= $filas['email3'] ?></td>
          <td><?= $filas['celular1'] ?></td>
          <td><?= $filas['celular2'] ?></td>
          <td><?= $filas['telefono1'] ?></td>
          <td><?= $filas['telefono2'] ?></td>
          <td><?= $filas['r_legal'] ?></td>
          <td><?= $filas['r_legal_identidad'] ?></td>
          <td><?= $filas['r_legal_celular1'] ?></td>
          <td><?= $filas['r_legal_celular2'] ?></td>
          <td><?= $filas['r_legal_email1'] ?></td>
          <td><?= $filas['r_legal_email2'] ?></td>
          <td>

          <form action="http://localhost/bytes-biller/cliente/actualizar" method="post">
            <input type="text" name="id" value="<?= $filas['id'] ?>" style="display: none !important" hidden>
            <input type="text" name="nombre" value="<?= $filas['nombre'] ?>" style="display: none !important" hidden>
            <input type="text" name="razon_social" value="<?= $filas['razon_social'] ?>" style="display: none !important" hidden>
            <input type="text" name="rtn" value="<?= $filas['rtn'] ?>" style="display: none !important" hidden>
            <input type="text" name="email1" value="<?= $filas['email1'] ?>" style="display: none !important" hidden>
            <input type="text" name="email2" value="<?= $filas['email2'] ?>" style="display: none !important" hidden>
            <input type="text" name="email3" value="<?= $filas['email3'] ?>" style="display: none !important" hidden>
            <input type="text" name="celular1" value="<?= $filas['celular1'] ?>" style="display: none !important" hidden>
            <input type="text" name="celular2" value="<?= $filas['celular2'] ?>" style="display: none !important" hidden>
            <input type="text" name="telefono1" value="<?= $filas['telefono1'] ?>" style="display: none !important" hidden>
            <input type="text" name="telefono2" value="<?= $filas['telefono2'] ?>" style="display: none !important" hidden>
            <input type="text" name="r_legal" value="<?= $filas['r_legal'] ?>" style="display: none !important" hidden>
            <input type="text" name="r_legal_identidad" value="<?= $filas['r_legal_identidad'] ?>" style="display: none !important" hidden>
            <input type="text" name="r_legal_celular1" value="<?= $filas['r_legal_celular1'] ?>" style="display: none !important" hidden>
            <input type="text" name="r_legal_celular2" value="<?= $filas['r_legal_celular2'] ?>" style="display: none !important" hidden>
            <input type="text" name="r_legal_email1" value="<?= $filas['r_legal_email1'] ?>" style="display: none !important" hidden>
            <input type="text" name="r_legal_email2" value="<?= $filas['r_legal_email2'] ?>" style="display: none !important" hidden>
            <button class="btn text-primary" type="submit">
              <div class="icon">
                <i class="bi bi-pencil-square"></i>
              </div>
            </button>
          </form>

          <form action="http://localhost/bytes-biller/cliente/eliminar" method="post">
            <input type="text" name="razon_social" value="<?= $filas['razon_social'] ?>" style="display: none !important" hidden>
            <input type="text" name="rtn" value="<?= $filas['rtn'] ?>" style="display: none !important" hidden>
            <button type="submit" class="btn text-danger">
              <div class="icon">
                <i class="bi bi-trash-fill"></i>
              </div>
            </button>
          </form>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>