<?php include_once '../../composants/user/header.php'; ?>
<?php include_once '../../functions/function_maintenance.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Maintenance</h1>
          </div>

          <?php include_once '../../composants/user/flashMessage.php'; ?>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Trottinette</th>
                  <th>pression_pneus</th>
                  <th>roues</th>
                  <th>freins</th>
                  <th>remplacement</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($maintenances_response as $maintenance): ?>      
                  <tr>
                    <td>#</td>
                    <td> 
                      <?php echo $maintenance['marque'] .' - '.$maintenance['modele']; ?> 
                    </td>
                    <td><?php echo $maintenance['pression_pneus']; ?></td>
                    <td><?php echo $maintenance['roues']; ?></td>
                    <td><?php echo $maintenance['freins']; ?></td>
                    <td><?php echo $maintenance['remplacement']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </main>

<?php include_once '../../composants/user/footer.php'; ?>