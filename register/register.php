<?php

$dbname = "bbm_db";
$dbuser = "root";
$dbhost = "localhost";
$dbpassword = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


    //require "conn.php";
	ob_start();
	session_start();
	
	//first part//
	$usernameit=$_POST['uuname'];
	$emaile = $_POST['uemail'];
	$usercetags = $_POST['categsfarms'];
	
	//second part//
	$ftnameit= $_POST['fname'];
	$mnameit= $_POST['mname'];
	$lnameit= $_POST['lname'];
	$enameit= $_POST['ename'];
	$usernameit1= $usernameit;
	$gendzit= $_POST['genderz'];
	$bday = $_POST['dateofbirth'];
	$birtit = date_create($bday);
	$berthit = date_format($birtit, "F d, Y");
	$phoneit = $_POST['phone'];
	$emaile1 = $emaile;
	$passwerd = $_POST['ppwordu'];
	$passwerd1 = hash('sha256',$passwerd);
	
	//third part//
	$regionit= $_POST['textit10'];
	$provinceit= $_POST['textit14'];
	$cityit= $_POST['textit11'];
	$barangayit= $_POST['textit12'];
	$housenumit= $_POST['haulack'];
	
	//fourth part//
	$validit = $_POST['selsvalchows'];
	$validit1 = $_POST['idnamlike'];
	
	

	// Database connection
	//$conn = new mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	
		$usercetagss = implode("",$usercetags);
		$gendzitt = implode("",$gendzit);
		$validitt = implode("",$validit);
		
	    $filename = $_FILES['image1']['name'];
		$filename1 = $_FILES['image2']['name']; 
		$filetmpname = $_FILES['image1']['tmp_name'];
		$filetmpname2 = $_FILES['image2']['tmp_name'];
		
		$fullName = $ftnameit ." ". $mnameit ." ". $lnameit ;

		mkdir("./USER_$ftnameit/", 0777, true);
		mkdir("./USER_$ftnameit/USER_PROFILE_PHOTO/", 0777, true);
		mkdir("./USER_$ftnameit/USER_VALID_ID/", 0777, true);
		$folder = "USER_$ftnameit/USER_VALID_ID/";
		$folder1= "USER_$ftnameit/USER_PROFILE_PHOTO/"; //location*/
 
		// create the user_unique_ID
		$resultc = mysqli_query($conn,"select count(1) as studs FROM user_profile");
		$rowc = mysqli_fetch_array($resultc);
		
		$totals = (int)$rowc['studs'] + 1;
		$yn = (int) date("Y");
		$month = strtoupper(date("M"));
		$six_digit_random_number = random_int(100000, 999999); 
		$user_unique_ID = $month.strval($yn*1 + $six_digit_random_number);

 
		$stmtssss = "insert into users (user_unique_ID, username, password) values('$user_unique_ID','$usernameit','$passwerd1')" ;
		$queryssss=mysqli_query($conn,$stmtssss) or die(mysqli_error($conn));

		if ($queryssss)
		{

		$stmt = "insert into user_category(user_unique_ID, user_uname,user_email,user_categs) values('$user_unique_ID','$usernameit','$emaile','$usercetagss')";
		$query=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
		
		if($query)
		{
			    $stmts ="insert into user_profile(user_unique_ID, user_fname,user_mname,user_lname,user_ename,user_uname,user_gendz,user_birthdatey,user_cpnum,user_email) values('$user_unique_ID','$ftnameit','$mnameit','$lnameit','$enameit','$usernameit1','$gendzitt','$berthit','$phoneit','$emaile1')";
				$querys=mysqli_query($conn,$stmts) or die(mysqli_error($conn));
				if($querys)
				{
					$stmtss ="insert into user_adds(user_unique_ID, user_region,user_province,user_city,user_barangay,user_housenum	) values('$user_unique_ID','$regionit','$provinceit','$cityit','$barangayit','$housenumit')";
					$queryss=mysqli_query($conn,$stmtss)or die(mysqli_error($conn));
					if($queryss)
					{
						$stmtsss ="insert into user_ides(user_unique_ID, user_valid,user_numvalid,user_validphot,user_profphot) values('$user_unique_ID','$validitt','$validit1','$filename','$filename1')";
						$querysss=mysqli_query($conn,$stmtsss)or die(mysqli_error($conn));
						if($querysss)
						{
						
							$initial_pass = hash('sha256', $usernameit);
							$stmtsss ="insert into users (user_unique_ID, username, password) values('$user_unique_ID','$usernameit','$initial_pass')";
							$querysss=mysqli_query($conn,$stmtsss)or die(mysqli_error($conn));

							echo "Registered successfully...";

 
							// echo '<button type="submit" class="registerbtn my-3" onclick="myFunctionsss()"> <a href="profile.php?res_id='.$emaile.'"> Proceed to Profile </a> </button>';
				
							move_uploaded_file($filetmpname,$folder.$filename);
							move_uploaded_file($filetmpname2,$folder1.$filename1);
							
							$_SESSION['usr_email'] = $emaile;
							$_SESSION['usr_unique_ID'] = $user_unique_ID;

							// header('Location:../profile/profile.php?user_id='.$user_unique_ID.'');
							header('Location: ../profile/profile.php');

						}

							
					}
				}
				
		
		
		}

	}
		
		
		$conn->close();
	
	}
	
	
	
   
?>
