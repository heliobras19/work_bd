<?php

include_once "./bd.php";

$result = $mysqli->query(
  'SELECT * FROM centro_custo;'
);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//cadastrar centro de custo
if (isset($_POST['cadastrar'])) {
  $nome = $_POST['nome'];
  $sql = "INSERT INTO `centro_custo`(`nome`) VALUES ('$nome')";

  if ($mysqli->query($sql) === TRUE) {
      echo "<script>alert('Centro de custo cadastrado com sucesso!');</script>";
      echo "<script>window.location.href = 'centro-custo.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}

//eliminar centro de custo
if (isset($_GET['eliminar'])) {
  $cod_centro = $_GET['id'];

  $sql = "DELETE FROM `centro_custo` WHERE cod_centro = '$cod_centro'";

  if ($mysqli->query($sql) === TRUE) {
    echo "<script>alert('Centro de custo eliminado com sucesso!');</script>";
    echo "<script>window.location.href = 'centro-custo.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Folha de Salário</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <h2><strong>CFS Soft.</strong></h2>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Principal</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./obreiro.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                    <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                  </svg>
                </span>
                <span class="hide-menu">Obreiro</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./area.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-door" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 12v.01"></path>
                    <path d="M3 21h18"></path>
                    <path d="M6 21v-16a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v16"></path>
                  </svg>
                </span>
                <span class="hide-menu">Área</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./assiduidade.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-hour-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    <path d="M12 12h3.5"></path>
                    <path d="M12 7v5"></path>
                  </svg>
                </span>
                <span class="hide-menu">Assiduidade</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./conta.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path>
                    <path d="M3 10l18 0"></path>
                    <path d="M7 15l.01 0"></path>
                    <path d="M11 15l2 0"></path>
                  </svg>
                </span>
                <span class="hide-menu">Conta</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./pagamento.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                    <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                  </svg>
                </span>
                <span class="hide-menu">Pagamento</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./centro-custo.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-businessplan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0"></path>
                    <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                    <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                    <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                    <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                    <path d="M5 15v1m0 -8v1"></path>
                  </svg>
                </span>
                <span class="hide-menu">Centro de Custo</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Consultas</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google-big-query" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17.73 19.875a2.225 2.225 0 0 1 -1.948 1.125h-7.283a2.222 2.222 0 0 1 -1.947 -1.158l-4.272 -6.75a2.269 2.269 0 0 1 0 -2.184l4.272 -6.75a2.225 2.225 0 0 1 1.946 -1.158h7.285c.809 0 1.554 .443 1.947 1.158l3.98 6.75a2.33 2.33 0 0 1 0 2.25l-3.98 6.75v-.033z"></path>
                    <path d="M11.5 11.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0"></path>
                    <path d="M14 14l2 2"></path>
                  </svg>
                </span>
                <span class="hide-menu">Consultas</span>
              </a>
            </li>
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="align-items-strech">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Listagem</button>
                <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Novo</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Novo Centro de Custo</h5>
                    <div class="card">
                      <div class="card-body">
                      <form action="" method="post">
                            <input type="hidden" name="cadastrar" value="true">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" name = "nome">
                          </div>
                          <button type="submit" class="mt-5 btn btn-primary">Confirmar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Lista de Centros de Custos</h5>
                    <div class="d-flex align-items-stretch">
                      <div class="card w-100">
                        <div class="card-body p-4">
                          <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                              <thead class="text-dark fs-4">
                                <tr>
                                  <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                  </th>
                                  <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nome</h6>
                                  </th>
                                  <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Ações</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($data as $item) {
                                  echo '   <tr>
                                  <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">' . $item['cod_centro'] . '</h6>
                                  </td>
                                  <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">' . $item['nome'] . '</h6> 
                                  </td> 
                                  <td class="border-bottom-0">
                                    <div class="d-flex justify-content-evenly align-items-center">
                                      <a href="centro-custoAE.php?editar=true&id='.$item['cod_centro'].'" class="mb-0 fw-normal btn btn-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar Obreiro" class="icon icon-tabler icon-tabler-edit" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                          <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                          </path>
                                          <path d="M16 5l3 3"></path>
                                        </svg>
                                      </a>
                                      <a href="?eliminar=true&id='.$item['cod_centro'].'" class="mb-0 fw-normal btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Excluir Obreiro" class="icon icon-tabler icon-tabler-eraser" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3">
                                          </path>
                                          <path d="M18 13.3l-6.3 -6.3"></path>
                                        </svg>

                                      </a>
                                    </div>
                                  </td>
                                </tr>';
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Desenvolvido pelo Grupo Nº 6 </p>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>