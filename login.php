<?php include_once 'composants/public/header.php'; ?>
<?php include_once 'functions/function_login.php'; ?>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Connexion</h1>
        </div>
      </section>

      <div class="bg-light">
        <div class="container">

          <?php include_once 'composants/public/flashMessage.php' ?>
          
          <div class="row">
            <div class="col-md-6">
              <img src="assets/img/trottinette.png" alt="" width="200" height="200">
            </div>
            <div class="col-md-6">
              <form action="login.php" method="POST">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                </div>
                <div class="form-group">
                  <label for="password">Mot de passe</label>
                  <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" required>
                </div>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-primary">
                    <i class="fa fa-user"></i>
                    Se connectez
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include_once 'composants/public/footer.php'; ?>