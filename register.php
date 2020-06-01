<?php include_once 'composants/public/header.php'; ?>
<?php include_once 'functions/function_register.php'; ?>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Inscription</h1>
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
              <form action="register.php" method="POST">
                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="name" name="nom" class="form-control" id="nom" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                  <label for="prenom">Prénom</label>
                  <input type="name" name="prenom" id="prenom" class="form-control" placeholder="Votre prénom" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Votre email" required>
                </div>
                <div class="form-group">
                  <label for="password">Mot de passe</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
                </div>
                <div class="form-group">
                  <label for="password_confirm">Confirmation du mot de passe</label>
                  <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Confirmation du mot de passe" required>
                </div>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i>
                    S'inscrire
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include_once 'composants/public/footer.php'; ?>