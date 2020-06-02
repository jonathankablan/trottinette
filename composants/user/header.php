<?php include_once '../../functions/database.php'; ?>
<?php include_once '../../functions/parameter.php'; ?>
<?php  
if ($_SESSION['id'] == null) {
  header('Location: ../../login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tableau de bord</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Tableau de bord</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link btn btn-danger p-2" href="../../functions/logout.php">
            <i class="fa fa-minus-circle"></i>
            Deconnexion
          </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                  <i class="fa fa-home"></i>
                  Tableau de bord
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="trottinette.php">
                  <i class="fa fa-diamond"></i>
                  Trottinette
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.php">
                  <i class="fa fa-calendar"></i>
                  Reservation
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="geolocalisation.php">
                  <i class="fa fa-map"></i>
                  Geolocalisation
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="maintenance.php">
                  <i class="fa fa-recycle"></i>
                  Maintenance
                </a>
              </li>
            </ul>
          </div>
        </nav>