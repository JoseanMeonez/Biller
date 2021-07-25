<br><br><br>
<div class="card">
  <h6 class="card-header bg-danger text-center text-white">Hubo un problema
    <div class="icon text-white" style="display: inline-flex">
      <i class="bi bi-exclamation-circle-fill"></i>
    </div>
  </h6>
  <div class="card-body text-center">
    <?php if ( !isset( $_GET['controller'] ) && !isset( $_GET['action'] ) ) : ?>
      <span class="card-text text-center">
        No se puede cargar ninguna página porque no existe ningun controlador ni acción por defecto.
      </span>
      <br><br>
    <?php elseif ( !isset( $_GET['controller'] ) ) : ?>
      <span class="card-text text-center">
        No se puede cargar ninguna página porque no existe ningun controlador por defecto.
      </span>
      <br><br>
    <?php elseif ( !isset( $_GET['action'] ) ) : ?>
      <span class="card-text text-center">
        No se puede cargar ninguna página porque no existe ninguna acción por defecto.
      </span>
      <br><br>
    <?php else : ?>
      <span class="card-text text-center">
        Ocurrió un problema para poder cargar la página a la que quiere acceder, por favor intente de nuevo más tarde, reporte el error si el problema persiste.
      </span>
      <br><br>
    <?php endif; ?>
    <!-- <a class="btn btn-primary card-text" href="<?= base_url ?>">Volver a inicio</a> -->
    <button class="btn btn-primary card-text" onClick="goBack();">Regresar</button>
  </div>
</div>