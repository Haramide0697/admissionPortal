<?php
/*	include '../admin/inc/header.php';
*/	$random = rand(0000000000,9999999999);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-success">
				<h3>Your payment is sucessful. Your transcation id is <?php echo $random;?></h3>
				<h3>Login with your email as username and Phone number as password</h3>
				<a href="../user/index.php"><button class="btn btn-info" >Goto Login</button></a>
			</div>
		</div>
	</div>
</div>
