<?php include_once 'functions/database.php'; ?>
<?php include_once 'functions/parameter.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Responsive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <?php if($_SESSION['id'] == null) { ?>
              <a class="btn btn-outline-success mr-3" href="login.php">
                <i class="fa fa-user"></i>
                Connexion
              </a>
              <a class="btn btn-outline-success" href="register.php">
                <i class="fa fa-user-plus"></i>
                Inscription
              </a>
            <?php } else { ?> 
               <a class="btn btn-primary mr-3">
                  <i class="fa fa-user"></i>
                 <?= strtoupper($_SESSION['nom']). ' ' . ucfirst($_SESSION['prenom']) ?>
               </a>
               <a class="btn btn-danger" href="functions/logout.php">
                  <i class="fa fa-minus-circle"></i>
                  Deconnexion
               </a>
            <?php } ?>
          </div>
        </div>
      </nav>
    </header>