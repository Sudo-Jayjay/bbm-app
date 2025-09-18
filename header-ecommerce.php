<!DOCTYPE html>
<html lang="en">
    <?php
        include("config.php");  
        error_reporting(0);  
        session_start(); 
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .navbar{
            background-color: #EDF2F4;
            text-align: right;
            color: black;
        }

        .navbar-dark .navbar-toggler {
            background-image: url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E);
            border-color: rgba(255,255,255,.1);
            color: black;
        }

        .navbar-toggler: hover{
            color:red;

        }

        .move-back-arrow{ 
            float: left;
            border: none;
            margin-top: 4px;
            background-color:#EDF2F4;
        }

        .container-ecom-nav{
            max-width: 1270px;
            width: 100%;
        }


    </style>

</head>

<body>  
 
    <header id="header" class="header-scroll top-header headrom"> 
            <nav class="navbar">
                <div class="container-ecom-nav">
 
                    <button class="move-back-arrow"><a href="../homepage.php"><i class="fa fa-arrow-left"></i></a></button>

                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                     
                      <?php
                            include("../config.php");
                            error_reporting(0);
                            session_start();

                            $myrows = mysqli_query($conn,"SELECT * FROM user_profile");  
                            while($rows = mysqli_fetch_array($myrows)) 
                                {
                                    if ($rows["user_unique_ID"] == $_SESSION["user_unique_ID"])
                                    {
                                        // echo 'Hello '.$rows["user_fname"].'';
                                    } 
                                }
                     ?>
                            
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>  
							<?php
                                if(empty($_SESSION["user_unique_ID"]))
                                    {
                                        echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                                    <li class="nav-item"><a href="reg_cat.php" class="nav-link active">Register</a> </li>';
                                    }
                                else
                                    {  
                                        echo  '<li class="nav-item"><a href="profile.php" class="nav-link active">Profile</a> </li>';
                                        echo  '<li class="nav-item"><a href="login.php" class="nav-link active">Logout</a> </li>';
                                    }
                            ?> 
                        </ul>
                    </div>
                </div>
            </nav> 
        </header>  

 
      
    
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script> 

  
</body> 


<script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>


</html>