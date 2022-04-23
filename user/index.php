<?php
      session_start();
      if (isset($_SESSION['id'])) {
        $identity = $_SESSION['id'];
      }


      include 'inc/headerlogin.php';
      include '../core/connection.php';


      if (isset($_POST['submituser'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
          $msg = "Fill all empty fields";
        }else{
          $select = $conn->query("SELECT * FROM registration WHERE email = '$username' AND phone = '$password'");
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

              $_SESSION['id'] = $id;
              $_SESSION['formnumber'] = $formnumber;
              $_SESSION['surname'] = $surname;
              $_SESSION['othernames'] = $othernames;
              $_SESSION['course'] = $course;
              $_SESSION['address'] = $address;
              $_SESSION['phone'] = $phone;
              $_SESSION['clas'] = $clas;
              $_SESSION['email'] = $email;
              redirect('main.php');
            }
          }else{
            $msg = "Incorrect login details";
          }
        }
      }

?>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/polylogo.jpg" alt="">
                  <span class="d-none d-lg-block">The Polytechnic Ibadan</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">APPLICANT LOGIN</h5>
                  </div>
                  <div class="col-md-12">
                    <?php if(isset($msg)){
                ?>
                <div class="alert alert-warning">
                  <?php
                echo $msg; ?>
                </div>
                <?php
                } ?>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submituser">Login</button>
                    </div>
                    <!-- <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="../register/index.php">Create an account</a></p>
                    </div> -->
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Orion Technologies</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>