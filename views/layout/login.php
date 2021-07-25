<body class="d-flex p-5 mt-5 bd-highlight justify-content-center body-background" >
<main>
  <div class="card col-12 shadow login-card">
    <!-- Card Header -->
    <h6 class="card-header bg-dark text-center text-white">Inicio de Sesión
      <div class="icon text-white" style="display: inline-flex">
        <i class="bi bi-people-fill"></i>
      </div>
    </h6>
    <!-- Card Title -->
    <div class="card-body text-center bg-light text-black">
      <h6 class="card-title mb-4">Ingresa tu usuario y contraseña</h6>
      <footer class="blockquote-footer">
        Si no puedes iniciar sesión contacta a soporte técnico.
      </footer>
      <!-- Formulario de inicio de sesión -->
      <form class="card-text bg-light text-black" action="<?= base_url ?>usuario/iniciarSesion" method="POST">
        <!-- User -->
          <label for="user" class="form-label">Usuario</label>
          <div class="input-group">
            <span class="input-group-text bg-secundary border-secundary ml-3" id="inputGroupPrepend">
              <div class="icon text-black" style="display: inline-flex">
                <i class="bi bi-person-check-fill"></i>
              </div>
            </span>
            <!-- User Input -->
            <input type="text" class="form-control bg-light text-muted mr-3" id="floatingInput" name="user" aria-describedby="inputGroupPrepend" required>
          </div>
        <br>
        <!-- Password -->
          <label for="password" class="form-label">Contraseña</label>
          <div class="input-group">
            <span class="input-group-text bg-secundary border-secundary ml-3" id="inputGroupPrepend">
              <div class="icon text-black" style="display: inline-flex">
                <i class="bi bi-key-fill"></i>
              </div>
            </span>
            <!-- Password Input -->
            <input type="Password" class="form-control bg-light text-muted mr-3" name="password" aria-describedby="inputGroupPrepend" required>
          </div>
        <br>
        <!-- Botón para enviar formulario -->
        <div class="col-12">
          <button class="btn btn-success" type="submit">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </div>
</main>
</body>