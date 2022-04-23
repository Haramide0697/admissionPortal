<?php
$pagename = "Profile"; 
include '../core/connection.php';
include '../core/config.php';
include "inc/header.php";
include "inc/sidebar.php";
include "inc/titlepage.php";

        

?>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-5">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              
              <img src="uploads/<?php echo "$passport"; ?>"alt="Profile" class="rounded-circle">
              <h2><?php echo "$surname"." "."$othernames"?></h2>
              <h3><?php echo "$course"?></h3>
              <h3><?php echo "$formnumber"?></h3>
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-7">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo "$surname"." "."$othernames"?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Form Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo "$formnumber"?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Department</div>
                    <div class="col-lg-9 col-md-8"><?php echo "$course"?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nationality</div>
                    <div class="col-lg-9 col-md-8">Nigerian</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo "$address"?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo "$phone"?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo "$email"?></div>
                  </div>

                </div>

          
                <div class="tab-pane fade pt-3" id="profile-settings">

                 
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 <?php 
 include 'inc/footer.php';
 ?>