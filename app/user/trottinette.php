<?php include_once '../../composants/user/header.php'; ?>
<?php include_once '../../functions/function_list_trottinette.php'; ?>
<?php include_once '../../functions/function_trottinette.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Trottinettes</h1>

            <!-- Button modal -->
            <button type="button" tabindex="-1" role="dialog" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Ajouter une trottinette
              <i class="fa fa-plus-square"></i>
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Ajouter une nouvelle trottinette</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="trottinette.php" method="POST">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="sel1">Modèle :</label>
                            <select name="modele" class="form-control" id="sel1">
                              <option value="m365">M365</option>
                              <option value="m362">M362</option>
                              <option value="e-pure">E-Pure</option>
                              <option value="z7">Z7</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="sel1">Marque :</label>
                            <select name="marque" class="form-control" id="sel1">
                              <option value="xaomi">Xaomi</option>
                              <option value="koowheel">Koowheel E-Scooter</option>
                              <option value="airwheel">Airwheel</option>
                              <option value="kingsong">KingSong</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="autonomie">autonomie</label>
                            <input type="number" name="autonomie" class="form-control" id="autonomie" required>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="sel1">Vitesse :</label>
                            <select name="vitesse" class="form-control" id="sel1">
                              <?php for($i = 1; $i <= 6; $i++ ): ?>
                                <option value="<?php echo $i; ?>"> <?php echo $i .' Km'; ?> </option>
                              <?php endfor; ?>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="kilometrage">Kilometrage</label>
                            <input type="number" name="kilometrage" class="form-control" id="kilometrage" required>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="temps_trajet">Temps trajet</label>
                            <input type="number" name="temps_trajet" class="form-control" id="temps_trajet" required>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="compteur_km">Compteur Km</label>
                            <input type="number" name="compteur_km" class="form-control" id="compteur_km" required>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="temperature">Temperature</label>
                            <input type="number" name="temperature" class="form-control" id="temperature" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <p> Regulateur vitesse </p>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="regulateur_vitesse"> <span class="badge badge-success">Install</span>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="regulateur_vitesse"> <span class="badge badge-warning">No Install</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <p> Feu Avant </p>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="feu_avant"> <span class="badge badge-success">Install</span>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="feu_avant"> <span class="badge badge-warning">No Install</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <p> Feu Arrière </p>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="feu_arriere"> <span class="badge badge-success">Install</span>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="feu_arriere"> <span class="badge badge-warning">No Install</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="duree_vie">Durée de vie</label>
                            <input type="number" name="duree_vie" class="form-control" id="duree_vie" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <button type="submit" name="trottinette" class="btn btn-primary">
                          <i class="fa fa-plus-square"></i>
                          Enregistrer
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php include_once '../../composants/user/flashMessage.php'; ?>

          <h2>Trottinette</h2>

          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="table table-dark table-sm">
                <tr>
                  <th>#</th>
                  <th>Marque</th>
                  <th>Modèle</th>
                  <th>Vitesse</th>
                  <th>Compteur km</th>
                  <th>Kilometrage</th>
                  <th>Autonomie</th>
                  <th>Date de création</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($trottinette_response as $trottinette) { ?>
                  <tr>
                    <td>#</td>
                    <td> <?php echo $trottinette['marque']; ?> </td>
                    <td> <?php echo $trottinette['modele']; ?> </td>
                    <td> <?php echo $trottinette['vitesse']; ?> </td>
                    <td> <?php echo $trottinette['compteur_km']; ?> </td>
                    <td> <?php echo $trottinette['kilometrage']; ?> </td>
                    <td> <?php echo $trottinette['autonomie']; ?> </td>
                    <td> <?php echo $trottinette['created_at']; ?> </td>
                  </tr> 
                <?php } ?> 
              </tbody>
            </table>
          </div>
        </main>

<?php include_once '../../composants/user/footer.php'; ?>