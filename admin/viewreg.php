<?php
$pagename = "Registered";
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
              <h5 class="card-title">List of registered Full time students</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Form Number</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Other names</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">State of Origin</th>
                    <th scope="col">LGA of origin</th>
                    <th scope="col">Course</th>
                    <th scope="col">Program</th>
                    <th scope="col">Class</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>

                <?php
                  $fetch = $conn->query("SELECT * FROM registration WHERE program = 'full time'");
                  $result = $fetch->fetchAll(PDO::FETCH_OBJ);
                  $count = $fetch->rowCount();
                  $sn=1;
                  if ($count > 0) {
                  foreach ($result as $key) {
                    $id = $key->id;
                    $formnumber = $key->formnumber;
                    $surname = $key->surname;
                    $othernames = $key->othernames;
                    $dob = $key->dob;
                    $gender = $key->gender;
                    $address = $key->address;
                    $state = $key->state;
                    $lga = $key->lga;
                    $course = $key->course;
                    $program = $key->program;
                    $clas = $key->clas;
                    $phone = $key->phone;
                    $email = $key->email;
                    $date = $key->date;
                  ?>
                  <tbody>
                  <tr>
<!--                     <th scope="row">1</th>
 -->                <td><?php echo "$sn"; ?></td>
                    <td><?php echo "$formnumber"; ?></td>
                    <td><?php echo "$surname"; ?></td>
                    <td><?php echo "$othernames"; ?></td>
                    <td><?php echo "$dob"; ?></td>
                    <td><?php echo "$gender"; ?></td>
                    <td><?php echo "$address"; ?></td>
                    <td><?php echo "$state"; ?></td>
                    <td><?php echo "$lga"; ?></td>
                    <td><?php echo "$course"; ?></td>
                    <td><?php echo "$program"; ?></td>
                    <td><?php echo "$clas"; ?></td>
                    <td><?php echo "$phone"; ?></td>
                    <td><?php echo "$email"; ?></td>
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