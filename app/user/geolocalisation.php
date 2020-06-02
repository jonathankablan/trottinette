<?php include_once '../../composants/user/header.php'; ?>
<?php include_once '../../functions/function_gealocalisation.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Geolocalisation</h1>
          </div>

          <?php include_once '../../composants/user/flashMessage.php'; ?>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Trottinette</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Ville</th>
                  <th>Pays</th>
                  <th>Code postal</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($geolocalisations_response as $geolocalisation): ?>      
                  <tr>
                    <td>#</td>
                    <td> 
                      <?php echo $geolocalisation['marque'] .' - '.$geolocalisation['modele']; ?> 
                    </td>
                    <td><?php echo round($geolocalisation['latitude'], 5); ?></td>
                    <td><?php echo $geolocalisation['longitude']; ?></td>
                    <td><?php echo $geolocalisation['city']; ?></td>
                    <td><?php echo $geolocalisation['country']; ?></td>
                    <td><?php echo $geolocalisation['code_postal']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </main>

<?php include_once '../../composants/user/footer.php'; ?>