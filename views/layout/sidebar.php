<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column shadow">
            <li class="nav-item">
              <a class="nav-link text-primary" aria-current="page" href="<?= base_url ?>principal/index">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <details>
                <summary class="nav-link list-group-item-action">
                  Clientes
                </summary>
                <a class="nav-link" href="<?= base_url ?>cliente/mostrarTodos">Listar Clientes</a>
                <br>
                <a class="nav-link" href="<?= base_url ?>cliente/registrar">Agregar Cliente</a>
              </details>
            </li>
            <li class="nav-item">
            <details>
                <summary class="nav-link list-group-item-action">
                  Usuarios
                </summary>
                <a class="nav-link" href="<?= base_url ?>usuario/mostrarTodos">Listar Usuarios</a>
                <br>
                <a class="nav-link" href="<?= base_url ?>usuario/registrar">Agregar Usuario</a>
              </details>
            </li>
            <li class="nav-item">
              <details>
                <summary class="nav-link list-group-item-action">
                  Reportes
                </summary>
              </details>
            </li>
            <li class="nav-item">
              <details>
                <summary class="nav-link list-group-item-action">
                  Facturas
                </summary>
              </details>
            </li>
          </ul>
          <ul class="nav flex-column shadow">
            <li class="nav-item text-nowrap">
              <a class="nav-link text-danger" href="#">Sign out</a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">