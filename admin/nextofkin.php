<?php
$pagename = "Next of Kin";
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
              <h5 class="card-title">Next of KIN details</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Form Number</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Other names</th>
                    <th scope="col">NOK Full name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Relationship</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
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
                    $fullname = $key->fullname;
                    $nokemail = $key->nokemail;
                    $nokaddress = $key->nokaddress;
                    $nokphone = $key->nokphone;
                    $relationship = $key->relationship;
                    $date = $key->date;
                  ?>
                  <tbody>
                  <tr>
<!--                     <th scope="row">1</th>
 -->                <td><?php echo "$sn"; ?></td>
                    <td><?php echo "$formnumber"; ?></td>
                    <td><?php echo "$surname"; ?></td>
                    <td><?php echo "$othernames"; ?></td>
                    <td><?php echo "$fullname"; ?></td>
                    <td><?php echo "$nokemail"; ?></td>
                    <td><?php echo "$nokaddress"; ?></td>
                    <td><?php echo "$nokphone"; ?></td>
                    <td><?php echo "$relationship"; ?></td>
                    <td></td>
                    <td><?php echo "$date"; ?></td>
                    
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