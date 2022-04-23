<?php
/*session_start();
  if(isset($_SESSION['formnumber'])){
    $identity = $_SESSION['id'];
    $formnumber = $_SESSION['formnumber'];
    $surname = $_SESSION['surname'];
    $course = $_SESSION['course'];
    $clas = $_SESSION['clas'];
    $email = $_SESSION['email'];
  }*/

$pagename = "Dashboard";
include '../core/connection.php';
include '../core/config.php';
include "inc/header.php";
include "inc/sidebar.php";
include "inc/titlepage.php";

if (!isset($_SESSION['id'])) {
  ?>
  <!-- <script type="text/javascript">
    window.location.replace("login.php");
  </script> -->
  <?php
  }


?>

  
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <div class="card-body">
                  <h5 class="card-title">Admission Status </h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cancel"></i>
                    </div>
                    <?php 

                      $select = $conn->query("SELECT * FROM registration WHERE formnumber = '$formnumber'");
                      $fetch = $select ->fetchAll(PDO::FETCH_OBJ);
                      $row = $select->rowCount();
                      if ($row > 0) {
                        foreach ($fetch as $key) {
                          $id = $key->id;
                          $formnumber = $key->formnumber;
                          $surname = $key->surname;
                          $othernames = $key->othernames;
                          $course = $key->course;
                          $address = $key->address;
                          $phone = $key->phone;
                          $clas = $key->clas;
                          $email = $key->email;
                          $passport = $key->passport;
                          $status = $key->status;

                          if ($status == 'admitted') {
                            $adm = "Congratulations, You have been admitted";
                          }else{
                            $adm = "Sorry! You have not been admitted";
                          }

                        }
                      }
                    ?>
                    <div class="ps-3">
                      <?php 
                        if (isset($adm)) {
                          ?>
                            <h6><?php  echo "$adm"; ?></h6>
                          <?php
                        }
                      ?>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <!-- <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
 -->
                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <!-- <div class="card-body">
                  <h5 class="card-title">No. of Admitted Students</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>?????</h6>

                    </div>
                  </div>
                </div> -->

              </div>
            </div><!-- End Revenue Card -->

            <!-- Revenue Card -->
           <!--  <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card"> -->

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <!-- <div class="card-body">
                  <h5 class="card-title">No. of Admitted Students</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>????</h6>

                    </div>
                  </div>
                </div> -->

              </div>
            </div><!-- End Revenue Card -->

           

      </div>
    </section>

  </main><!-- End #main -->

 <?php
 include "inc/footer.php";
?>