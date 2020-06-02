<?php include_once '../../composants/user/header.php'; ?>
<?php include_once '../../functions/function_list_trottinette.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tableau de bord</h1>
          </div>

          <?php include_once '../../composants/user/flashMessage.php'; ?>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Trottinette</th>
                  <th>Autonomie</th>
                  <th>Vitesse</th>
                  <th>Date de reservation</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($trottinettes_response as $trottinette): ?>      
                  <tr>
                    <td>#</td>
                    <td> 
                      <?php echo $trottinette['marque'] .' - '.$trottinette['modele']; ?> 
                    </td>
                    <td><?php echo $trottinette['autonomie']; ?></td>
                    <td><?php echo $trottinette['vitesse']; ?></td>
                    <td> 
                      <span class="badge badge-primary"> 
                        <i class="fa fa-calendar"></i>
                        <?php echo $trottinette['date_reservation']; ?> 
                      </span> 
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </main>

<?php include_once '../../composants/user/footer.php'; ?>