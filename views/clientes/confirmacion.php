<br><br><br>
<div class="card">
  <h6 class="card-header bg-danger text-center text-white">
    ¿Estás seguro que quieres borrar al cliente <?= $_POST['razon_social'] ?> de la base de datos?
    <div class="icon text-white" style="display: inline-flex">
      <i class="bi bi-exclamation-circle-fill"></i>
    </div>
  </h6>
  <div class="card-body text-center">
    <form class="card-text" action="<?= base_url ?>cliente/eliminar" method="POST">
      <input type="text" name="razon_social_capturada" value="<?= $_POST['razon_social'] ?>" style="display: none !important" hidden>
      <input type="text" name="rtn_capturado" value="<?= $_POST['rtn'] ?>" style="display: none !important" hidden>
      <button type="submit" class="btn btn-secondary card-text">
        Si, quiero borrarlo.
      </button>
    </form>
  <br>
    <a href="<?= base_url ?>cliente/mostrarTodos" class="btn btn-primary card-text">No, volver atrás.</a>
  </div>
</div>
