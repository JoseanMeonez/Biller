<br><br><br>
<div class="card">
  <h6 class="card-header bg-success text-center text-white">Acción completada
    <div class="icon text-white" style="display: inline-flex">
      <i class="bi bi-check-circle-fill"></i>
    </div>
  </h6>
  <div class="card-body text-center">
    <?php if ( isset( $_POST['razon_social_capturada'] ) and !empty( $_POST['razon_social_capturada'] ) ) :?>

      <span class="card-text text-center">Se eliminó al cliente <?= $_POST['razon_social_capturada'] ?> correctamente.</span>
      <br><br>
      <a class="btn btn-primary card-text" href="<?= base_url ?>cliente/mostrarTodos">Listo</a>

    <?php elseif( isset( $_POST['id_capturada'] ) and !empty( $_POST['id_capturada'] ) ) : ?>

      <span class="card-text text-center">Se actualizó la información de <?= $_POST['nombre'] ?> correctamente.</span>
      <br><br>
      <a class="btn btn-primary card-text" href="<?= base_url ?>cliente/mostrarTodos">Listo</a>

    <?php else : ?>

      <span class="card-text text-center">La operación solicitada se completó con éxito.</span>
      <br><br>
      <a class="btn btn-primary card-text" href="<?= base_url ?>">Volver a inicio</a>

    <?php endif; ?>
  </div>
</div>