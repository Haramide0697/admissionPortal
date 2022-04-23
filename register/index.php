<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register | The Polytechnic Ibadan</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="icon"  href="../assets/img/polylogo.jpg">
</head>

<?php 
    include '../core/connection.php';
    include '../control.php';
?>


<body>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h3 class="title">REGISTRATION INFO</h3>
                    <form method="POST" name="myform">
                        <div class="row row-space">
                        <div class="input-group col-2">
                            <input class="input--style-1" type="text" placeholder="Surname" name="surname" required onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
    placeholder="Full Name">
                        </div>
                        <div class="input-group col-2">
                            <input class="input--style-1" type="text" placeholder="Other Names" name="othernames" required onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
    placeholder="Full Name">
                        </div>
                    </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="dob" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required>
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-1" type="text" placeholder="Address" name="address" required>
                            </div>
                        </div>
                       <div class="row row-space">
                        <div class="input-group col-2">
                            <input class="input--style-1" type="text" placeholder="State of Origin" name="state" required onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
    placeholder="Full Name">
                        </div>
                        <div class="input-group col-2">
                            <input class="input--style-1" type="text" placeholder="LGA of Origin" name="lga" required onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
    placeholder="Full Name">
                        </div>
                    </div>

                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Course" name="course" required onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
    placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="program" required>
                                            <option disabled="disabled" selected="selected">Program</option>
                                            <option value="full time">Full Time</option>
                                            <option value="DPP">DPP</option>
                                            <option value="CEC">CEC</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="clas" required>
                                            <option disabled="disabled" selected="selected">Class</option>
                                            <option value="ND">ND</option>
                                            <option value="HND">HND</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required>
                        </div>
                        
                        <h3 class="title">NEXT OF KIN INFO</h3>

                        <div class="row row-space">
                        <div class="input-group col-2">
                            <input class="input--style-1" type="text" placeholder="Full name" name="fullname" required onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
    placeholder="Full Name">
                        </div>
                        <div class="input-group col-2">
                            <input class="input--style-1" type="email" placeholder="Email" name="nokemail" required>
                        </div>
                    </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="nokaddress" required>
                        </div>
                        <div class="row row-space">
                        <div class="input-group col-2">
                            <input class="input--style-1" type="text" placeholder="Phone Number" name="nokphone" required>
                        </div>
                        <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="relationship" required>
                                            <option disabled="disabled" selected="selected">Relationship</option>
                                            <option value="parent">Parent</option>
                                            <option value="sibling">Sibling</option>
                                            <option value="spouse">Spouse</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                    </div>


                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
