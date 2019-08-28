<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="../static/assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../static/assets/img/favicon.png">
      <title>Relatório Mensal</title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link href="../static/assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="../static/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
      <link href="../static/assets/demo/demo.css" rel="stylesheet" />
    </head>

    <body class="">
      <div class="wrapper">
        <div class="sidebar">
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="active ">
                <a href="./dashboard.html">
                  <i class="tim-icons icon-chart-pie-36"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-panel">
          <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div id="teste">
                  <h3>Painel de controle</h3>
                  <a class="navbar-brand" href="javascript:void(0)"></a>
                </div>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
            </div>
          </nav>
          <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="card card-chart">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <h5 class="card-category">Relatório </h5>
                        <h2 class="card-title">Anual</h2>
                      </div>
                      <div class="col-sm-6">
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                          <label class="btn btn-sm btn-primary btn-simple active" id="0">
                            <input type="radio" name="options" checked>
                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                            <span class="d-block d-sm-none">
                              <i class="tim-icons icon-single-02"></i>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="chartBig1"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                    <h5 class="card-category">Total Shipments</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="chartLinePurple"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                    <h5 class="card-category">Vendas Diárias</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="CountryChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                    <h5 class="card-category">Completed Tasks</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="chartLineGreen"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#pablo">Action</a>
                <a class="dropdown-item" href="#pablo">Another action</a>
                <a class="dropdown-item" href="#pablo">Something else</a>
              </div>
          </div>
        </div>
      </div> 
      <script src="../static/assets/js/core/jquery.min.js"></script>
      <script src="../static/assets/js/core/popper.min.js"></script>
      <script src="../static/assets/js/core/bootstrap.min.js"></script>
      <script src="../static/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <script src="../static/assets/js/plugins/chartjs.min.js"></script> 
      <script src="../static/assets/js/plugins/bootstrap-notify.js"></script> -->
      <script src="../static/assets/js/black-dashboard.min.js?v=1.0.0"></script> 
      <script src="../static/assets/demo/demo.js"></script>
      <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
      </script>
    </body>
</html>