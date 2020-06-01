<?php include_once 'composants/public/header.php'; ?>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Trottinette Disponible</h1>
        </div>
      </section>

      <div class="bg-light">
        <div class="container">
          <div class="row">
            <?php for($i = 0; $i < 3; $i++) { ?>
            <div class="col-md-3 m-3">
              <div class="card" style="width: 18rem;">
                <img src="assets/img/trottinette.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Xaomi - MP5485</h5>
                  <a href="#" class="btn btn-block btn-success">
                    <i class="fa fa-battery-full"></i>
                    Disponible
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fa fa-battery-empty"></i>
                    Indisponible
                  </a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>

<?php include_once 'composants/public/footer.php'; ?>