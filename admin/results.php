<?php
$pagename = "Results";
  require('../core/connection.php');
  include "inc/header.php";
  include "inc/sidebar.php";
  include "inc/titlepage.php";



?>




    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Results</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Form Number</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Other names</th>
                    <th scope="col">Level</th>
                    <th scope="col">First sitting</th>
                    <th scope="col">Second sitting</th>
                    <th scope="col">Jamb Result</th>
                    <th scope="col">ND Result(HND)</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <?php
                  $fetch = $conn->query("SELECT * FROM registration");
                  $result = $fetch->fetchAll(PDO::FETCH_OBJ);
                  $count = $fetch->rowCount();
                  $sn=1;
                  if ($count > 0) {
                  foreach ($result as $key) {
                    $id = $key->id;
                    $formnumber = $key->formnumber;
                    $surname = $key->surname;
                    $othernames = $key->othernames;
                    $clas = $key->clas;
                    $olevel1 = $key->olevel1;
                    $olevel2 = $key->olevel2;
                    $jambslip = $key->jambslip;
                    $nor = $key->nor;
                    $date = $key->date;
                  ?>
                  <tbody>
                  <tr>
<!--                     <th scope="row">1</th>
 -->                <td><?php echo "$sn"; ?></td>
                    <td><?php echo "$formnumber"; ?></td>
                    <td><?php echo "$surname"; ?></td>
                    <td><?php echo "$othernames"; ?></td>
                    <td><?php echo "$clas"; ?></td>
                    <td><img src="../user/uploads/<?php echo $olevel1; ?>" height="100" width="100"></td>
                    <td><img src="../user/uploads/<?php echo $olevel2; ?>" height="100" width="100"></td>
                    <td><img src="../user/uploads/<?php echo $jambslip; ?>" height="100" width="100"></td>
                    <td><img src="../user/uploads/<?php echo $nor; ?>" height="100" width="100"></td>
                    <td><?php echo "$date"; ?></td>
                    <td>
                      <div class="row">
                        <div class="col-md-12">
                          <a href="admit.php?user=<?php echo $id;?>"><button class="btn btn-success" name="admit">Admit</button></a>
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="col-md-6">
                          <button class="btn btn-danger" name="noadmit">Delete</button>
                        </div>
                      </div> -->
                    </td>
                  </tr>
              <?php
              $sn++;
                  }

                }else{
                  ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="alert alert-warning" role="alert">
                        <h3>No data found</h3>
                      </div>
                    </div>
                  </div>
                  <?php
                }


                  ?>
                
 </tbody>
              </table>


            </div>
          </div>

        </div>
      </div>

              <!-- End Table with stripped rows -->

    </section>

  </main><!-- End #main -->

  <?php
  include "inc/footer.php";
?>