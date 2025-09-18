<!DOCTYPE html>
<html lang="en">

<?php
	include("../config.php");
        error_reporting(0);
		session_start();
		
		$sched0 = $_POST['dateofbirth'];
		$date0 = date_create($sched0);  
        $sdate = date_format($date0, "F d, Y");

		$user_ID = 	$_SESSION['usr_unique_ID']; 
 
		$get_user = $conn->query("SELECT * FROM merged_users_user_info WHERE user_unique_ID = '$user_ID'");
		$user_info = $get_user->fetch_assoc();
		$save_loc = $user_info['user_unique_ID']; 
		
	if($_SERVER["REQUEST_METHOD"] == "POST") {
         
		//store inputted values from edit to specific variable
        $fName = $_POST['first_name'];
		$mName = $_POST['mid_name'];
		$lName = $_POST['last_name'];
		$extName = $_POST['ext_name'];
		$userName = $_POST['user_name'];
		$sex = $_POST['gender'];
		//$bertday = $_POST['dateofbirth'];
		$contactNum = $_POST['conctact'];
		//$region = $_POST['region'];
		//$province = $_POST['province'];
		//$city = $_POST['city'];
		//$barangay = $_POST['barangay'];
		$street = $_POST['house'];
		
		$region = $_POST['in-region'];
        $province = $_POST['in-province'];
        $city = $_POST['in-city'];
        $barangay = $_POST['in-barangay'];

        // START === To retain INITIAL USER ADDRESS
        // if user did not update region, it will use the previous data
        if ($region == NULL ){
            $qml ="SELECT * FROM merged_users_user_info where user_unique_ID = '$user_ID'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $region = $roww['user_region'];
        }

        // if user did not update province, it will use the previous data
        if ($province == NULL ){
            $qml ="SELECT * FROM merged_users_user_info where user_unique_ID = '$user_ID'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $province = $roww['user_province'];
        }

        // if user did not update city, it will use the previous data
        if ($city == NULL ){
            $qml ="SELECT * FROM merged_users_user_info where user_unique_ID = '$user_ID'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $city = $roww['user_city'];
        }

        // if user did not update barangay, it will use the previous data
        if ($barangay == NULL ){
            $qml ="SELECT * FROM merged_users_user_info where user_unique_ID = '$user_ID'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $barangay = $roww['user_brgy'];
        }
        // END === To retain INITIAL USER ADDRESS
		
		
		//if user changed their first name and upload new photo
		if (($fName != $user_info['user_fname']) && ($_FILES['file']['name'] != NULL)){
			
        //create new directory with new inputted First Name
		    mkdir("../register/USER_".$fName."/USER_PROFILE_PHOTO/", 0777, true);
		    $oldFolderProfile = "../register/USER_".$user_info['user_fname']."/USER_PROFILE_PHOTO/"; //old folder for profile picture
			$newFolderProfile = "../register/USER_".$fName."/USER_PROFILE_PHOTO/"; //new folder for profile picture
				
		//new folder for valid ID
			mkdir("../register/USER_".$fName."/USER_VALID_ID/", 0777, true);
			$oldFolderID = "../register/USER_".$user_info['user_fname']."/USER_VALID_ID/"; //old dir to get ID
			$newFolderID = "../register/USER_".$fName."/USER_VALID_ID/"; //new dir of ID
		
		//uploaded new photo and put into new folder, save to database file name
		// to get the value of the UPLOADED PHOTO 
			$photo_name = $_FILES['file']['name'];
			$photo_tmp_name = $_FILES['file']['tmp_name'];
			$poster_upload_path = $newFolderProfile.$photo_name;
			move_uploaded_file($photo_tmp_name, $poster_upload_path);
         
			$query = "UPDATE merged_users_user_info SET user_photo='$photo_name' WHERE user_unique_ID = '$user_ID'"; 
			$query_run = mysqli_query($conn, $query);
			
		//move valid ID files
			$old1 = $oldFolderID;
            $new1 = $newFolderID;

            $dh1 = opendir($old1);

            while (($file1 = readdir($dh1)) !== false) {
                if (preg_match('/\.jpg$/', $file1)) {
					copy($old1.'/'.$file1, $new1.'/'.$file1);
                } else if (preg_match('/\.png$/', $file1)) {
					copy($old1.'/'.$file1, $new1.'/'.$file1);
                } else if (preg_match('/\.jpeg$/', $file1)) {
                    copy($old1.'/'.$file1, $new1.'/'.$file1);
                }
            }
					
				closedir($dh1);
                    
                array_map('unlink', glob("$old1/*"));
                rmdir($old1);
		
		//if user changed their first name, use old photo
		} else if(($fName != $user_info['user_fname']) && ($_FILES['file']['name'] == NULL)) {
			
			//create new directory with new inputted First Name
		    mkdir("../register/USER_".$fName."/USER_PROFILE_PHOTO/", 0777, true);
		    $oldFolderProfile1 = "../register/USER_".$user_info['user_fname']."/USER_PROFILE_PHOTO/"; //old folder for profile picture
			$newFolderProfile1 = "../register/USER_".$fName."/USER_PROFILE_PHOTO/"; //new folder for profile picture
				
			//new folder for valid ID
			mkdir("../register/USER_".$fName."/USER_VALID_ID/", 0777, true);
			$oldFolderID1 = "../register/USER_".$user_info['user_fname']."/USER_VALID_ID/"; //old dir to get ID
			$newFolderID1 = "../register/USER_".$fName."/USER_VALID_ID/"; //new dir of ID
		
				$qml ="SELECT * FROM merged_users_user_info where user_unique_ID = '$user_ID'"; 
				$query_run = mysqli_query($conn, $qml); 
				$roww=mysqli_fetch_array($query_run); 
				$photo_name = $roww['user_photo'];
				
				$query = "UPDATE merged_users_user_info SET user_photo='$photo_name' WHERE user_unique_ID = '$user_ID'"; 
				$query_run = mysqli_query($conn, $query);
			
			//move profile files
			$old2 = $oldFolderProfile1;
            $new2 = $newFolderProfile1;

            $dh2 = opendir($old2);

            while (($file2 = readdir($dh2)) !== false) {
                if (preg_match('/\.jpg$/', $file2)) {
					copy($old2.'/'.$file2, $new2.'/'.$file2);
                } else if (preg_match('/\.png$/', $file2)) {
					copy($old2.'/'.$file2, $new2.'/'.$file2);
                } else if (preg_match('/\.jpeg$/', $file2)) {
                    copy($old2.'/'.$file2, $new2.'/'.$file2);
                }
            }
					
				closedir($dh2);
                    
                array_map('unlink', glob("$old2/*"));
                rmdir($old2);
				
			//move valid id files
			$old3 = $oldFolderID1;
            $new3 = $newFolderID1;

            $dh3 = opendir($old3);

            while (($file3 = readdir($dh3)) !== false) {
                if (preg_match('/\.jpg$/', $file3)) {
					copy($old3.'/'.$file3, $new3.'/'.$file3);
                } else if (preg_match('/\.png$/', $file3)) {
					copy($old3.'/'.$file3, $new3.'/'.$file3);
                } else if (preg_match('/\.jpeg$/', $file3)) {
                    copy($old3.'/'.$file3, $new3.'/'.$file3);
                }
            }
					
				closedir($dh3);
                    
                array_map('unlink', glob("$old3/*"));
                rmdir($old3);
		
		} else { //first name not changed
			
		// to get the value of the UPLOADED PHOTO 
			$photo_name = $_FILES['file']['name'];
			$photo_tmp_name = $_FILES['file']['tmp_name'];
			$poster_upload_path = "../register/USER_".$user_info['user_fname']."/USER_PROFILE_PHOTO/". $photo_name;
			move_uploaded_file($photo_tmp_name, $poster_upload_path);
          
        // if user did not upload a photo, it will use the previous file 
			if ($photo_name == NULL ){
				$qml ="SELECT * FROM merged_users_user_info where user_unique_ID = '$user_ID'"; 
				$query_run = mysqli_query($conn, $qml); 
				$roww=mysqli_fetch_array($query_run); 
				$photo_name = $roww['user_photo'];
			} 
			
			$query = "UPDATE merged_users_user_info SET user_photo='$photo_name' WHERE user_unique_ID = '$user_ID'"; 
			$query_run = mysqli_query($conn, $query);
		}
		
		$query_2 = "UPDATE merged_users_user_info SET user_fname='$fName', user_mname='$mName', user_lname='$lName', user_ext='$extName', username='$userName', user_sex='$sex', user_bday='$sdate', user_phone='$contactNum' WHERE user_unique_ID = '$user_ID'";
		$query_run_2 = mysqli_query($conn, $query_2);
		
		$query_3 = "UPDATE merged_users_user_info SET user_region='$region', user_province='$province', user_city='$city', user_brgy='$barangay', user_street='$street' WHERE user_unique_ID = '$user_ID'";
		$query_run_3 = mysqli_query($conn, $query_3);
		
       if(($query_run) || ($query_run_2) || ($query_run_3)){
            //echo "Records inserted successfully."; 
            header("location: profile.php");
            exit(); // use exit. It's a good practice

        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
		
    }
    

?>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Profile</title>
    <link href="sidebar_styles.css" rel="stylesheet" /> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    <link href="edit_profile.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

	<style>
        #ola{
            display: none;
        }
		
		.edit-icon {
			height: 30px;
			width: 30px;
			color: #80471C;
			float: right;
			display: inline;
			border-radius: 50%;
			margin-right: 25%;
			margin-left: 0px;
			margin-top: -100px;
		}

        .btn-back-prof{
            background: #fcfcfa;
        }
    </style>
	
</head>


<body>  
    <div class="d-flex" id="wrapper">

        <!-- Page content wrapper starts-->
        <div id="page-content-wrapper">

            <!-- Top navigation starts-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
			
                <div class="container-var">
                    <a href="profile.php"> <button class="btn btn-back-prof"><i class="fa fa-arrow-left"></i></button> </a>
                </div>
				
            </nav>
            <!-- Top navigation ends-->

            <!-- page-wrapper starts -->
            <div class="page-wrapper">
                <div class="container"> 
				
				<form action='' method='POST' enctype="multipart/form-data">
                    <h3 class="header-title">Edit Profile Information</h3>

                    <div class="image-icon">
						
						<img class="edit-img-icon" id="img-id" img src="<?php echo '../register/USER_'.$user_info['user_fname'].'/USER_PROFILE_PHOTO/'.$user_info['user_photo'].'' ?>" alt=" ">
                            <label for="upload-icon" class="edit-icon">
                                <i class="fa fa-edit"></i> 
                                <input type="file" id="upload-icon" class="" name="file" hidden />
                            </label>  
						
                    </div>

                    <div class="container-box market-container">
                        <h5 class="h5-header market-header">Personal Information<i class="fa fa-file-text"></i></h5>
                            <div class="market-details-container">
                                <div>
                                    <div class="title">
                                        <label for="title-input" class="label title-input">First Name</label>
                                        <input name="first_name" type="text" class="input-field" id="fname-input" value="<?php echo $user_info['user_fname']; ?>">
                                    </div>
                                    
                                    <div class="title">
                                        <label for="title-input" class="label title-input">Middle Name</label>
                                        <input name="mid_name" type="text" class="input-field" id="mname-input" value="<?php echo $user_info['user_mname']; ?>">
                                    </div>
									
									<div class="title">
                                        <label for="title-input" class="label title-input">Last Name</label>
                                        <input name="last_name" type="text" class="input-field" id="lname-input" value="<?php echo $user_info['user_lname']; ?>">
                                    </div>
                                    
                                    <div class="title">
                                        <label for="title-input" class="label title-input">Extension Name</label>
                                        <input name="ext_name" type="text" class="input-field" id="extname-input" value="<?php echo $user_info['user_ext']; ?>">
                                    </div>
									
									<div class="title">
                                        <label for="title-input" class="label title-input">Username</label>
                                        <input name="user_name" type="text" class="input-field" id="username-input" value="<?php echo $user_info['username']; ?>">
                                    </div>
									
                                    <div class="title">
                                        <label for="title-input" class="label gender-input"> Gender </label>
											<select id="gender" class="category" id="gender-input" name="gender"> 
												<option value="<?php echo $user_info['user_sex'] ?>">--Select Option--</option>
												<option value="Female"> Female </option>
												<option value="Male"> Male </option>
												<option value="Others"> Others </option>
											</select>
                                    </div>
									
									<div class="title">
									<label for="title-input" class="label birthdate-input"> Birth Date </label>
										<input name="dateofbirth" type="date" name="dateofbirth" id="dateofbirth" class="input-field" value="<?php $adate = $user_info['user_bday']; $sdate = date_create($adate);
                                                            echo date_format($sdate,"Y-m-d"); ?>" oninput='birthdateses();'>
										</div>
									
									 <div class="title">
                                        <label for="contact-num" class="label contact-num">Contact Number</label>
                                        <input name="conctact" type="Number" class="input-field" id="contact-num" value="<?php echo $user_info['user_phone']; ?>">
                                    </div>
									
									<div class="title">
                                        <label for="contact-num" class="label contact-email">Email Address</label>
                                        <input name="email" type="text" class="input-field" id="contact-email" value="<?php echo $user_info['user_email']; ?>" disabled>
                                    </div>

                                </div>

                            </div>
                    </div>

                    <div class="container-box market-container">
                        <h5 class="h5-header market-header">Personal Address<i class="fa fa-file-text"></i></h5>
                            <div class="market-details-container">
                                
                                <div>
                                    <div class="location" >
                                        <label for="region-input" class="label region-input">Region</label>
                                        <div id="maloc">
                                            <select class="category">
                                                <?php 
                                                    echo '<option id="region_select" value='.$user_info['user_region'].' selected>'.$user_info['user_region'].'</select>';
                                                ?> 
                                            </select>
                                        </div>
                                        <div id="ola"> 
                                            <input type="hidden" name="in-region"/>
                                            <select id="region" class="category" name="region"></select>
                                        </div>
                                    </div> 

                                    <div class="location">
                                        <label for="province-input" class="label province-input">Province</label> 
                                        <input type="hidden" name="in-province"/> 
                                        <select id="province" class="category" name="province">
                                        <?php 
                                            echo '<option id="province_select" value='.$user_info['user_province'].' selected>'.$user_info['user_province'].'</select>';
                                        ?> 
                                        </select>


                                    </div>

                                    <div class="location">
                                        <label for="city-input" class="label city-input">City</label>
                                        <input type="hidden" name="in-city"/> 
                                        <select id="city" class="category" name="city">
                                        <?php 
                                            echo '<option id="city_select" value='.$user_info['user_city'].' selected>'.$user_info['user_city'].'</select>';
                                        ?> 
                                        </select>
                                    </div>

                                    <div class="location">
                                        <label for="barangay-input" class="label barangay-input">Barangay</label>
                                        <input type="hidden" name="in-barangay"/> 
                                        <select id="barangay" class="category" name="barangay">
                                        <?php  
                                            echo '<option id="barangay_select" value='.$user_info['user_brgy'].' selected>'.$user_info['user_brgy'].'</select>';
                                        ?> 
                                        </select>
                                    </div>

                                </div>

                                <div class="house-street">
                                    <label for="house-street-input" class="label house-street-input">House/Lot no. Street</label>
                                    <input type="text" class="input-field" id="house-street-input" name="house" value="<?php echo $user_info['user_street']; ?>">
                                </div>

                            </div>

                            <div class="save-edit-container">

								<button type="submit" name="submit" class="save-edit">Save</button>
								<a href="profile.php"> <button type="button" class="save-edit">Cancel</button> </a>
								
                            </div>

                    </div>
					
					</form>
                </div>
				
            </div>  
            <!-- page-wrapper ends -->

        </div>
        <!-- Page content wrapper ends-->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 

    <!-- Sidebar Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar_scripts.js"></script> 

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

     <script>

		function birthdateses() 
	{
		var sp9am = document.getElementById("spam9");
		var sp10am = document.getElementById("spam10");
		
		var now = new Date();//getting current date
		var currentY= now.getFullYear();//extracting year from the date
		var currentM= now.getMonth();
		currentM= currentM +1;	//extracting month from the date
		var currentD = now.getDate();
		
		var dobget =document.getElementById("dateofbirth").value; //getting user input
		var dob= new Date(dobget);//formatting input as date
		//alert(dob);
		var prevY= dob.getFullYear(); //extracting year from input date
		var prevM= dob.getMonth();
		prevM= prevM +1;//extracting month from input date
		var prevD= dob.getDate();
		var ageY = currentY - prevY;
		
		if (prevM < currentM)
		{
			
			if((prevD <= currentD ) && (prevY > 1000))
			{
				sp9am.style.display = "block";
				sp10am.style.display = "none";
				verit6 = 1;
			}
			
			else if ((prevD > currentD) && (prevY > 1000))
			{
				sp9am.style.display = "block";
				sp10am.style.display = "none";
				verit6 = 1;
			}
			else
			{
				sp9am.style.display = "none";
				sp10am.style.display = "block";
				verit6 = 0;
			}
			
		}
		
		else if (prevM >= currentM)
		{
			
			if((prevD <= currentD) && (prevY > 1000))
			{
				sp9am.style.display = "block";
				sp10am.style.display = "none";
				verit6 = 1;
			}
			else if ((prevD > currentD) && (prevY > 1000))
			{
				sp9am.style.display = "block";
				sp10am.style.display = "none";
				verit6 = 1;
			}
			else
			{
				sp9am.style.display = "none";
				sp10am.style.display = "block";
				verit6 = 0;
			}
		}
		
		else
		{
			sp9am.style.display = "none";
			sp10am.style.display = "block";
			verit6 = 0;
		}
		
		
	}
	
    </script>
	
	<script type="text/javascript">
        const uploadBtn = document.querySelector("#upload-icon");
        const img = document.querySelector("#img-id")

        function uploadActive(){
            uploadBtn.click();
        }

        uploadBtn.addEventListener("change", function(){
            const imgFile = this.files[0];
            if(imgFile){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                    img.src = result;
                }
                reader.readAsDataURL(imgFile);
            }
        });
    </script>
	
	 <script>
        
        var my_handlers = {

            fill_provinces: function(){ 
                
                var region_code = $(this).val(); 

                // we are getting the text() here, not val()
                var region_caption = $("#region option:selected").text();
                // var region_caption = $(this).text();

                // the hidden field will contain the name of the region, not the code
                $('input[name=in-region]').val(region_caption);
                
                $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
            },

            fill_cities: function(){ 
                var province_code = $(this).val();

                // we are getting the text() here, not val()
                var province_caption = $("#province option:selected").text();
                // var province_caption = $(this).text();

                // the hidden field will contain the name of the region, not the code
                $('input[name=in-province]').val(province_caption);

                $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
            },

            fill_barangays: function(){
                var city_code = $(this).val();

                // we are getting the text() here, not val()
                var city_caption = $("#city option:selected").text();
                // var city_caption = $(this).text();
                
                // the hidden field will contain the name of the region, not the code
                $('input[name=in-city]').val(city_caption);

                $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
            },
        
            get_barangays: function(){

                // we are getting the text() here, not val()
                var brgy_caption = $("#barangay option:selected").text();
                // var city_caption = $(this).text();

                // the hidden field will contain the name of the region, not the code
                $('input[name=in-barangay]').val(brgy_caption);

                $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
            }
        };

        $(function(){
            $('#region').on('change', my_handlers.fill_provinces);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);
            $('#barangay').on('change', my_handlers.get_barangays);

            $('#region').ph_locations({'location_type': 'regions'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#barangay').ph_locations({'location_type': 'barangays'}); 
            $('#region').ph_locations('fetch_list');
            
        });
    </script>
	
	
    <!-- script to edit PSGC -->
    <script>
        const maloc = document.getElementById("maloc");
        const ola = document.getElementById("ola");

        maloc.onclick = function () { 
            maloc.style.display = "none"; 
            ola.style.display = "block";
        };  
    </script>
	
	

</body> 
</html>
 