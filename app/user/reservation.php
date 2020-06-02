<?php include_once '../../composants/user/header.php'; ?>
<?php include_once '../../functions/function_list_trottinette.php'; ?>
<?php include_once '../../functions/function_list_reservation.php'; ?>
<?php include_once '../../functions/function_list_user.php'; ?>
<?php include_once '../../functions/function_add_reservation.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reservation</h1>

            <!-- Button modal -->
            <button type="button" tabindex="-1" role="dialog" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Prendre une trottinette
              <i class="fa fa-plus-square"></i>
            </button>

            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Reservez une trottinette</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="reservation.php" method="POST">
                      
                      <div class="form-group">
                        <label for="trottinette">Trottinette :</label>
                        <select name="id_trottinette" class="form-control" id="trottinette">
                          <?php foreach($trottinettes_response as $trottinette): ?>
                            <?php 
                            $date_reservation = new DateTime($trottinette['date_reservation']);
                            $date_actuelle = new DateTime();
                            if($date_reservation < $date_actuelle){ ?>
                            <option value="<?php echo $trottinette['id_trottinette']; ?>"> <?php echo $trottinette['marque'] .' - '.$trottinette['modele']; ?> </option>
                            <?php } ?>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="user">Utilisateur :</label>
                        <select name="id_user" class="form-control" id="user">
                          <?php foreach($users_response as $user): ?>
                            <option value="<?php echo $user['id']; ?>"> <?php echo $user['nom'] .' - '.$user['prenom']; ?> </option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="date_reservation">Date de reservation</label>
                        <input type="datetime-local" name="date_reservation" class="form-control" id="date_reservation" required>
                      </div>

                      <div class="form-group mt-3">
                        <button type="submit" name="reservation" class="btn btn-primary">
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

          <h2>Section title</h2>
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