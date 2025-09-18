<!DOCTYPE html>
<html lang="en">
  
<head>

<?php
    session_start();
    include("config.php");

    if (isset($_POST['login'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $usr_password = hash('sha256',$_POST['password']);
        $usr_password =validate($usr_password);
        $usr_username = validate($_POST['username']);

            
            $sql = "SELECT * FROM users WHERE username='$usr_username' AND password ='$usr_password'";
            $result = mysqli_query($conn, $sql);
           
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if($row['username'] === $usr_username && $row['password'] === $usr_password){
                    $_SESSION['usr_username'] = $row['username'];
                    $_SESSION['usr_unique_ID'] = $row['user_unique_ID'];
                    header("Location: profile/profile.php");
                    exit();
                } else{ 
                    header("Location: index.php?error=Incorrect Email or password");
                    exit(); 
                } 
                         
            }  else{ 
                header("Location: index.php?error=Incorrect Email or password");
                exit(); 
            }
    }  

    

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet"> 
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">  
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <style>


body {
  background-image: url('bg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  font-family: 'Inter';

}

img{
    display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px; 
  margin-bottom: 20px;
}

p{
    font-size: 14px;
    text-align: center;
    margin-bottom: 140px;
}

input{
    width: 100%;
    height: 60px;
    border: none;
    
    background-color: #140F26A5 ;
    font-family: 'Montserrat';
    background: rgba(20, 15, 38, 0.648579);
    
   
    border-radius: 10px;
    backdrop-filter: blur(3px);
    color: white;
    padding-left: 20px;
    outline: none;
    
}

input::placeholder{
    
    color: white;
   
}

.login{
    background-image: linear-gradient(to left, #004586 21%, #0B82F1 100%);
    width: 100%;
    height: 50px;
    border-radius: 30px;
    border: none;
    color: white;
    font-size: 12px;
    font-family: 'Montserrat';
    letter-spacing: 2.78px;
    
}


h1{
    color: white;
    font-family: 'Montserrat';
    font-size: 12px;
    margin-top: 30px;
    margin-bottom: 20px;
}
 
.login-with-google-btn{
    font-family: 'Montserrat';
    font-size: 12px;
    color: white;
    letter-spacing: 2.78px;
    height: 50px;
    width: 100%;
    border-radius: 30px;

    background: rgba(255, 255, 255, 0.35);
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
    background-repeat: no-repeat;
    background-position: 30px 14px;
    background-blend-mode: overlay;
    backdrop-filter: blur(3px);
    
    border: none;


}


.forgot-pass{
    color: white;
    font-family: 'Montserrat';
    font-size: 12px;
    margin-top: 45px;
    border: none;
    background-color: inherit;
    padding: 14px 10px;
   text-align: left;
   margin-left: 25px;
   display: inline-block;
}

.create-account{
    color: white;
    font-family: 'Montserrat';
    font-size: 12px;
    text-align: right;
    margin-left: 39px;
    display: inline-block;
    margin-top: 45px;
    border: none;
    background-color: inherit;
    padding: 14px 10px;
    
}

.show-pw{
    font-family: 'Montserrat';
    font-size: 10px;
    padding: 2px 5px;
    border-radius: 3px;

    background: rgba(255, 255, 255, 0.15);
    background-blend-mode: overlay;
    backdrop-filter: blur(43.444px);
    color: white;
    font-weight: bold;
    position: absolute;
    right: 44px;
    margin-top: 20px; 
}

.error{
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
 
    </style>
</head>


<body>  

<img src="da-logo.png" alt="DA Logo" width="150px" height="150px">
<p>Bilihan at Bagsakan ng mga Mamamayan</p>

                
    <!-- main block starts -->
    <div class="page-wrapper">
        <div class="container" style="text-align:center"> 
        
           
            <form name="login-form" method='POST' enctype="multipart/form-data">
                

            <?php
                 if (isset($_GET['error'])) { 
                    echo '<p class="error">'.$_GET['error'].'</p>';
                }
            
            ?>
       

            <div class="form-element">
                    
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" placeholder="username" required  />
                </div> <br>
                <div class="form-element">
                    
                    <input type="password" id="pass" name="password" placeholder="Your password" required />
                   <button type="button" id="show-pw" class="btn show-pw" onClick="showPass()">SHOW</button>
                    
                    
                </div><br>
                <button type="submit" class="button login" name="login" value="login">SIGN IN</button>
            </form>

            <h1 style="color:black">OR</h1>
            <a href="register/bbm_reg.php"> <button type="submit" class="button login" name="login" value="login">REGISTER</button></a>

            <!-- <a href="<?php echo $client->createAuthUrl(); ?>"> -->
            <button type="button" id="google-login" class="login-with-google-btn">CONTINUE WITH GMAIL</button>
            
            </div> 
            <button class="btn forgot-pass">FORGOT PASSWORD</button>
            <button class="btn create-account">CREATE ACCOUNT</button>

        </div> 

        
    </div>
    <!-- main block ends -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script> 

    <script>

        function showPass() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>

</body> 
</html>

<!-- https://fontawesome.com/icons/comment-dots?s=solid -->
<!-- https://fontawesome.com/v4/examples/ --> 

 