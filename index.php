<?php include_once 'composants/public/header.php'; ?>
<?php include_once 'functions/function_list_trottinette.php'; ?>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Trottinette</h1>
        </div>
      </section>

      <div class="bg-light">
        <div class="container">
          <div class="row">
            <?php foreach($trottinettes_response as $trottinette): ?>
            <div class="col-md-3 m-3">
              <div class="card" style="width: 18rem;">
                <img src="assets/img/trottinette.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $trottinette['marque'] .' - '.$trottinette['modele'] ?>

                    <span class="badge badge-primary">
                      <i class="fa fa-battery-full"></i>
                      <?php echo $trottinette['autonomie']; ?>
                    </span>
                  </h5>

                  <div href="#" class="btn btn-block btn-success">
                    <i class="fa fa-calendar"></i>
                    <?php echo $trottinette['date_reservation']; ?>
                  </div>
                    
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </main>

<?php include_once 'composants/public/footer.php'; ?>