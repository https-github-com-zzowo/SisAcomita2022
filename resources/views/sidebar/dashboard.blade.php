<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap");
body,
button {
  font-family: "Inter", sans-serif;
}
:root {
  --offcanvas-width: 270px;
  --topNavbarHeight: 56px;
}
.sidebar-nav {
  width: var(--offcanvas-width);
}
@media (min-width: 992px) {
  body {
    overflow: auto !important;
  }a
  main {
    margin-left: var(--offcanvas-width);
  }

  .offcanvas-backdrop::before {
    display: none;
  }
  .sidebar-nav {
    -webkit-transform: none;
    transform: none;
    visibility: visible !important;
    height: calc(100% - var(--topNavbarHeight));
    top: var(--topNavbarHeight);
  }
}

.container {
  max-width: 1900px;
}

.noTiene {
  display: none;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
          </button>
          <a class="navbar-brand me-auto ms-lg-0 ms-3 text-light fw-bold" href="#">
            ACOMITA2
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
            aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="topNavBar">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="icon ion-md-contact"></i>
                  <%=locals.cargo%>: <%=locals.name%>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                  <li><a class="dropdown-item" href="#">Configuración</a></li>
                  <li>
                    <a class="dropdown-item" href="/sign">Cerrar Sesión</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="offcanvas offcanvas-start sidebar-nav bg-dark fixed-left container" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
          <nav class="navbar-dark">
            <ul class="navbar-nav">
              <li>
                <div class="text-muted small fw-bold text-uppercase px-3">
                  Inicio
                </div>
              </li>
              <li>
                <a href="/dashboard" class="nav-link px-3 active">
                  <span class="me-2"><i class="icon ion-md-grid"></i></span>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="my-4">
                <hr class="dropdown-divider bg-light" />
              </li>
              <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                  Socios
                </div>
              </li>
              <li>
                <a href="/socios/add" class="nav-link px-3">
                  <span class="me-2"><i class="icon ion-md-person"></i></span>
                  <span>Nuevo Socio</span>
                </a>
              </li>
              <li>
                <a href="/socios" class="nav-link px-3">
                  <span class="me-2"><i class="icon ion-md-people"></i></span>
                  <span>Lista de Socios</span>
                </a>
              </li>
              <li>
                <a href="/tables" class="nav-link px-3">
                  <span class="me-2"><i class="icon ion-md-bookmarks"></i></span>
                  <span>Informe de multas</span>
                </a>
              </li>
              <li class="my-4">
                <hr class="dropdown-divider bg-light" />
              </li>F
              <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                  Actividades
                </div>
              </li>
              <li>
                <a href="/actividades" class="nav-link px-3">
                  <span class="me-2"><i class="icon ion-md-bookmarks"></i></i></span>
                  <span>Actividades</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link px-3">
                  <span class="me-2"><i class="icon ion-md-print"></i></span>
                  <span>Reportes</span>
                </a>
              </li>
              <li class="my-4">
                <hr class="dropdown-divider bg-light" />
              </li>
              <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                  Soporte
                </div>
              </li>
              <li>
                <a href="#" class="nav-link px-3">
                  <span class="me-2"><i class="icon ion-md-help"></i></span>
                  <span>Ayuda</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
</body>
</html>

