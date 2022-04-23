<?php
$pagename = "Upload Result"; 
require "../core/connection.php";
include "inc/header.php";
include "inc/sidebar.php";
include "inc/titlepage.php";

if(isset($_POST['submitupload'])) {
  $olevel1_name=$_FILES['olevel1']['name'];
  $olevel1tmp= $_FILES['olevel1']['tmp_name'];
  $olevel1_size= $_FILES['olevel1']['size'];
  $rando = rand(00001,99999);
  $hash = sha1($olevel1_name);
  $hash = $hash.$rando;
  $ext1 = pathinfo($olevel1_name, PATHINFO_EXTENSION);
  $ext1 = strtolower($ext1);
  $uploadfolder = "uploads/".$hash.".".$ext1;
  $uploadolevel1 = $hash.".".$ext1;
  move_uploaded_file($olevel1tmp, $uploadfolder);

  /*$olevel1 = $_FILES['olevel1'];
  $olevel1Name = $_FILES['olevel1']['name'];
  $olevel1TmpName = $_FILES['olevel1']['tmp_name'];
  $olevel1Size = $_FILES['olevel1']['size'];
  move_uploaded_file($_FILES["olevel1"]["tmp_name"],"uploads/" . $_FILES["olevel1"]["name"]);*/

  $olevel2_name=$_FILES['olevel2']['name'];
  $olevel2tmp= $_FILES['olevel2']['tmp_name'];
  $olevel2_size= $_FILES['olevel2']['size'];
  $rando = rand(00001,99999);
  $hash1 = sha1($olevel2_name);
  $hash1 = $hash1.$rando;
  $ext1 = pathinfo($olevel2_name, PATHINFO_EXTENSION);
  $ext1 = strtolower($ext1);
  $uploadfolder = "uploads/".$hash1.".".$ext1;
  $uploadolevel2 = $hash1.".".$ext1;
  move_uploaded_file($olevel2tmp, $uploadfolder);

  $jambslip_name=$_FILES['jambslip']['name'];
  $jambsliptmp= $_FILES['jambslip']['tmp_name'];
  $jambslip_size= $_FILES['jambslip']['size'];
  $rando = rand(00001,99999);
  $hash3 = sha1($jambslip_name);
  $hash3 = $hash3.$rando;
  $ext1 = pathinfo($jambslip_name, PATHINFO_EXTENSION);
  $ext1 = strtolower($ext1);
  $uploadfolder = "uploads/".$hash3.".".$ext1;
  $uploadjambslip = $hash3.".".$ext1;
  move_uploaded_file($jambsliptmp, $uploadfolder);

  $nor_name=$_FILES['nor']['name'];
  $nortmp= $_FILES['nor']['tmp_name'];
  $nor_size= $_FILES['nor']['size'];
  $rando = rand(00001,99999);
  $hash4 = sha1($nor_name);
  $hash4 = $hash4.$rando;
  $ext1 = pathinfo($nor_name, PATHINFO_EXTENSION);
  $ext1 = strtolower($ext1);
  $uploadfolder = "uploads/".$hash4.".".$ext1;
  $uploadnor = $hash4.".".$ext1;
  move_uploaded_file($nortmp, $uploadfolder);

  $passport_name= $_FILES['passport']['name'];
  $passporttmp = $_FILES['passport']['tmp_name'];
  $passport_size= $_FILES['passport']['size'];
  $rando = rand(00001,99999);
  $hash5 = sha1($passport_name);
  $hash5 = $hash5.$rando;
  $ext1 = pathinfo($passport_name, PATHINFO_EXTENSION);
  $ext1 = strtolower($ext1);
  $uploadfolder = "uploads/".$hash5.".".$ext1;
  $uploadpassport = $hash5.".".$ext1;
  move_uploaded_file($passporttmp, $uploadfolder);

    if (empty($olevel2_name)) {
      $in = array('olevel1' => $uploadolevel1,
              'jambslip' => $uploadjambslip,
              'nor' => $uploadnor,
              'passport' => $uploadpassport,
             );
      update('registration', $in, 'id', $identity); 
    }elseif (empty($jambslip_name)) {
      $in = array('olevel1' => $uploadolevel1,
              'olevel2' => $uploadolevel2,
              'nor' => $uploadnor,
              'passport' => $uploadpassport,
             );
      update('registration', $in, 'id', $identity); 
    }elseif (empty($nor_name)) {
      $in = array('olevel1' => $uploadolevel1,
              'olevel2' => $uploadolevel2,
              'jambslip' => $uploadjambslip,
              'passport' => $uploadpassport,
             );
      update('registration', $in, 'id', $identity); 
    }
      $msg = "Files upload successful";
}
 ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Upload files</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data" action="resultupload.php"> 
              <div class="col-md-12">
                    <?php if(isset($msg)){
                ?>
                <div class="alert alert-success">
                  <?php
                echo $msg; ?>
                </div>
                <?php
                } ?>
                  </div> 
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label" >First O level</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="olevel1" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Second O level</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="olevel2">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Jamb Result</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="jambslip">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Notification of Result</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="nor">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Passport</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="passport">
                  </div>
                </div>


                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-md" name="submitupload">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>

  </main><!-- End #main -->

 <?php 
  include 'inc/footer.php';
 ?>