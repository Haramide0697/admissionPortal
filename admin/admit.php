<?php
$pagename = "Admission";
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
              <h5 class="card-title">Admit</h5>



                <?php


                  if (isset($_GET['user']) && !empty($_GET['user'])) {
                    $theuser = $_GET['user'];
                    $in = array('status' => 'admitted', );
                    update('registration',$in,'id',$theuser);
                    $fetch = $conn->query("SELECT * FROM registration WHERE id ='$theuser' LIMIT 1");
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
                    <div class="alert alert-success">
                      <p>You have successfully admitted <?php echo "$surname $othernames"; ?> Click <a href="results.php">here</a> to go back</p>
                    </div>
                    <?php

                  }

                }
                  }
                  


                  ?>
                



            </div>
          </div>

        </div>
      </div>


    </section>

  </main><!-- End #main -->

  <?php
  include "inc/footer.php";
?>