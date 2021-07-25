<br><br><br>
  <div class="col-12">
    <a class="btn btn-primary" href="<?= base_url ?>cliente/mostrarTodos">Volver atrás</a>
    <br><br>
  </div>
<form class="row g-3 needs-validation" method="post" action="<?= base_url ?>cliente/actualizar">

  <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre de la Empresa</label>
    <input type="text" class="form-control" name="nombre" value="<?= $_POST['nombre'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="razon_social" class="form-label">Razon Social</label>
    <input type="text" class="form-control" name="razon_social" value="<?= $_POST['razon_social'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="rtn" class="form-label">RTN</label>
    <input type="text" class="form-control" name="rtn" value="<?= $_POST['rtn'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="email1" class="form-label">Correo Principal</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="email1" aria-describedby="inputGroupPrepend" value="<?= $_POST['email1'] ?>" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="email2" class="form-label">Correo Secundario</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="email2" aria-describedby="inputGroupPrepend" value="<?= $_POST['email2'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="email3" class="form-label">Tercer Correo</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="email3" aria-describedby="inputGroupPrepend" value="<?= $_POST['email3'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="celular1" class="form-label">Celular 1</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">#</span>
      <input type="text" class="form-control" name="celular1" aria-describedby="inputGroupPrepend" value="<?= $_POST['celular1'] ?>" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="celular2" class="form-label">Celular 2</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">#</span>
      <input type="text" class="form-control" name="celular2" aria-describedby="inputGroupPrepend" value="<?= $_POST['celular2'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="telefono1" class="form-label">Teléfono 1</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">#</span>
      <input type="text" class="form-control" name="telefono1" aria-describedby="inputGroupPrepend" value="<?= $_POST['telefono1'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="telefono2" class="form-label">Teléfono 2</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">#</span>
      <input type="text" class="form-control" name="telefono2" aria-describedby="inputGroupPrepend" value="<?= $_POST['telefono2'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="r_legal" class="form-label">Representante Legal</label>
    <input type="text" class="form-control" name="r_legal" value="<?= $_POST['r_legal'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="r_legal_identidad" class="form-label">Identidad del Representante Legal</label>
    <input type="text" class="form-control" name="r_legal_identidad" value="<?= $_POST['r_legal_identidad'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="r_legal_celular1" class="form-label">Celular del Representante Legal</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">#</span>
      <input type="text" class="form-control" name="r_legal_celular1" aria-describedby="inputGroupPrepend" value="<?= $_POST['r_legal_celular1'] ?>" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="r_legal_celular2" class="form-label">Celular secundario del Representate Legal</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">#</span>
      <input type="text" class="form-control" name="r_legal_celular2" aria-describedby="inputGroupPrepend" value="<?= $_POST['r_legal_celular2'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="r_legal_correo1" class="form-label">Correo del Representante Legal</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="r_legal_email1" aria-describedby="inputGroupPrepend" value="<?= $_POST['r_legal_email1'] ?>" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="r_legal_correo2" class="form-label">Correo Secundario del Representante Legal</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="r_legal_email2" aria-describedby="inputGroupPrepend" value="<?= $_POST['r_legal_email2'] ?>">
    </div>
  </div>

  <div class="col-md-4">
    <label for="id_capturada" class="form-label" style="display: none !important">ID</label>
    <input type="text" class="form-control" name="id_capturada" value="<?= $_POST['id'] ?>" style="display: none !important" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Actualizar Cliente</button>
    <br><br>
  </div>

</form>