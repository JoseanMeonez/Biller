<br><br><br>
<div class="card">
  <h6 class="card-header bg-danger text-center text-white">Ya existen datos
    <div class="icon text-white" style="display: inline-flex">
      <i class="bi bi-exclamation-circle-fill"></i>
    </div>
  </h6>
  <div class="card-body text-center">
    <?php if ( isset( $_POST['razon_social'] ) ) : ?>

      <span class="card-text text-center">
        Alguno de los datos que ingresaste del cliente (<?= $_POST['nombre'] ?>) ya existe en la base de datos, por favor vuelve a intentarlo y verifica dichos datos, los cuales podrían ser el RTN(<?= $_POST['rtn'] ?>) o la razón social(<?= $_POST['razon_social'] ?>).
      </span>
      <br><br>
      <form action="<?= base_url ?>cliente/actualizar" method="post">
        <input type="text" name="nombre" value="<?= $_POST['nombre'] ?>" style="display: none">
        <input type="text" name="razon_social" value="<?= $_POST['razon_social'] ?>" style="display: none">
        <input type="text" name="rtn" value="<?= $_POST['rtn'] ?>" style="display: none">
        <input type="text" name="email1" value="<?= $_POST['email1'] ?>" style="display: none">
        <input type="text" name="email2" value="<?= $_POST['email2'] ?>" style="display: none">
        <input type="text" name="email3" value="<?= $_POST['email3'] ?>" style="display: none">
        <input type="text" name="celular1" value="<?= $_POST['celular1'] ?>" style="display: none">
        <input type="text" name="celular2" value="<?= $_POST['celular2'] ?>" style="display: none">
        <input type="text" name="telefono1" value="<?= $_POST['telefono1'] ?>" style="display: none">
        <input type="text" name="telefono2" value="<?= $_POST['telefono2'] ?>" style="display: none">
        <input type="text" name="r_legal" value="<?= $_POST['r_legal'] ?>" style="display: none">
        <input type="text" name="r_legal_identidad" value="<?= $_POST['r_legal_identidad'] ?>" style="display: none">
        <input type="text" name="r_legal_celular1" value="<?= $_POST['r_legal_celular1'] ?>" style="display: none">
        <input type="text" name="r_legal_celular2" value="<?= $_POST['r_legal_celular2'] ?>" style="display: none">
        <input type="text" name="r_legal_email1" value="<?= $_POST['r_legal_email1'] ?>" style="display: none">
        <input type="text" name="r_legal_email2" value="<?= $_POST['r_legal_email2'] ?>" style="display: none">

        <button type="goBack()" class="btn btn-primary card-text">
          Probar de nuevo
        </button>
      </form>

    <?php elseif ( isset( $_POST['razon_social'] ) ) : ?>

      <span class="card-text text-center">
        Alguno de los datos que ingresaste del cliente (<?= $_POST['nombre'] ?>) ya existe en la base de datos, por favor vuelve a intentarlo y verifica dichos datos, los cuales podrían ser el RTN(<?= $_POST['rtn'] ?>) o la razón social(<?= $_POST['razon_social'] ?>).
      </span>
      <br><br>
      <a class="btn btn-primary card-text" href="<?= base_url ?>cliente/registrar">
        Probar de nuevo
      </a>

    <?php elseif ( !isset( $_POST['razon_social'] ) and isset( $_POST['usuario'] ) ) : ?>

      <span class="card-text text-center">
        Alguno de los datos que ingresaste del usuario (<?= $_POST['nombre'] ?>) ya existe en la base de datos, por favor vuelve a intentarlo y verifica dichos datos, los cuales podrían ser un RTN o un nombre usuario.
      </span>
      <br><br>
      <a class="btn btn-primary card-text" href="<?= base_url ?>usuario/registrar">
        Probar de nuevo
      </a>

    <?php endif; ?>
  </div>
</div>