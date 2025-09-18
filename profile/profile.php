<!DOCTYPE html>
<html lang="en">

<?php
	include("../config.php");
        error_reporting(0);
		session_start();

		$user_ID = 	$_SESSION['usr_unique_ID']; 
 
		$get_user = $conn->query("SELECT * FROM merged_users_user_info WHERE user_unique_ID = '$user_ID'");
		$user_info = $get_user->fetch_assoc();
		$save_loc = $user_info['user_unique_ID']; 
 
?>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
	<style>
		.profile-card { 
			text-align: center; 
			overflow: hidden;
			width:100%;
			border-radius:0px;
		}

		.container {
			margin-left: auto;
			margin-right: auto;
			padding-left: 0px;
			padding-right: 0px;
			width: 100%;
		}


		.border {
			width: 100%;
			height: 1px;
			background: #bbb;
		}

		body{
			background: #384d48;
		}

		.navbar{
			background: #7ea16b;
		}

		.btn-logout {
			background-color: #384d48;
			color: white;
		} 

		.edit{
			border-radius: 10px;
			margin-top:10px;
			margin-bottom:0px;
		}
	</style>
</head>


<body> 
 
    <!-- main block starts -->
    <div class="page-wrapper">
        <div class="container"> 
			<div class="div_top">
				 <a href="logout.php">
				 <button class="btn btn-logout">Logout</button> 
				 </a>
			</div> 

			<div class="profile-card">
			<div class="card-header">
			<div class="pic">
				<?php
					echo '<img src="../register/USER_'.$user_info['user_fname'].'/USER_PROFILE_PHOTO/'.$user_info['user_photo'].'" alt="">';
				?>
			</div>
			
			<div class="name"> <?php echo $user_info['user_fname']." ".$user_info['user_lname']; ?></div>
			<div class="border"> </div>
			<div class="username"> <?php echo $user_info['username']; ?> </div>
			<a href="edit_profile.php"> <button type="button" class="btn edit"><i class="fa fa-edit font-edit"></i>  Edit Profile</button> </a>
     
			</div>
			<div class="card-footer">
			Personal Information
			<div class="item">
				First Name: <?php echo $user_info['user_fname']; ?> <br>
				Middle Name: <?php echo $user_info['user_mname']; ?> <br>
				Last Name: <?php echo $user_info['user_lname']; ?> <br>
				extension name: <?php echo $user_info['user_ext']; ?><br>
				<!--username<br>-->
				gender: <?php echo $user_info['user_sex']; ?> <br>
				
				birth date: <?php 
				$bert = $user_info['user_bday'];
                $birth = date_create($bert);  
                $finalBirth = date_format($birth, "F d, Y");
                echo $finalBirth; ?><br>
				contact num: <?php echo $user_info['user_phone']; ?><br>
				email address: <?php echo $user_info['user_email']; ?><br>

			</div>
			<br>Address
			<div class="item">
				<?php echo $user_info['user_province']; ?> <br>
				<?php echo $user_info['user_region']; ?> <br>
				<?php echo $user_info['user_city']; ?> <br>
				<?php echo $user_info['user_brgy']; ?> <br>
				<?php echo $user_info['user_street']; ?> <br>
			</div>
			</div>
			</div>
			<!--end-->
			
        </div> 
    </div>
    <!-- main block ends -->
  

	<!-- Bottom navbar starts --> 
	<div class="bottom-nav"> 
    <div class="navbare">
        <div class="col-xs-3 center "><a href="../homepage.php"><i class="fas fa-home"></i></a></div>
        <div class="col-xs-3 center"><a href="#"><i class="fas fa-qrcode"></i></a></div>
        <div class="col-xs-3 center"><a href="../ecommerce/buyer-home.php"><i class="fas fa-shopping-cart"></i></a></div>
        <div class="col-xs-3 center radius"><a href="#"><i class="fas fa-list"></i></a></div> 
    </div> 
    </div>
    <!-- Bottom navbar ends -->


    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 


	<script>
		function logout() {

		}
	</script>

</body> 
</html>
 