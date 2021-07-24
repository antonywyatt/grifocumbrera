<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grifo Cumbrera</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <link  rel="icon"   href="https://img.icons8.com/fluent/96/000000/gas.png" type="image/png" />
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="home">
      <img
        src="https://img.icons8.com/fluent/96/000000/gas.png"
        height="30"
        alt=""
        loading="lazy"
        style="margin-top: -1px;"
      />
      <small>Grifo Cumbrera</small>
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="numeracion">Numeración Gasohol</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="numeraciond">Numeración Diesel</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <?php
        if($this->session->login){
        ?>  
        <a 
        class="btn btn-danger px-3 me-2"
        href="login/logout"
        >
          Cerrar Sesión
        </a>
        <?php
        }else{
        ?>
        <button type="button" class="btn btn-primary px-3 me-2" data-mdb-toggle="modal"
        data-mdb-target="#Login">
          Iniciar Sesión
        </button>
        <?php
        }
        ?>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- Modal -->
<div
  class="modal fade"
  id="Login"
  tabindex="-1"
  aria-labelledby="LoginLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <form action="login" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginLabel">Iniciar Sesión</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="form-outline mb-4">
          <input type="text" id="user" class="form-control form-control-lg" name="user"/>
          <label class="form-label" for="user">Usuario</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" id="pass" class="form-control form-control-lg" name="password"/>
          <label class="form-label" for="pass">Contraseña</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Cerrar
        </button>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </div>
    </div>
    </form>
  </div>
</div>