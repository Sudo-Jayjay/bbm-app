<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet"> 
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/homepage_css/homepage-style.css" rel="stylesheet">  
    <script type="text/javascript" src="js/homepage_js/carousel.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body> 
<?php include 'header-footer.php';?> 
 
    <!-- main block starts -->
    <div class="page-wrapper">
        <div class="container"> 
            <h3>Homepage</h3> 

            <!-- Info Board -->
            <!-- <section>
                <div class="container-box-middle info-board" id="data-carousel">
                   
                    <button id="prev"><i class="fa fa-angle-double-left left-arrow" aria-hidden="true"></i></button>
                    <button id="next"><i class="fa fa-angle-double-right right-arrow" aria-hidden="true"></i></button>
                    <ul id="data-slides">
                        <li class="slide" id="data-active">
                            <img src="images/good_bois/boi1.jpg" class="images">
                        </li>
                        <li class="slide">
                            <img src="images/good_bois/boi2.jpg" class="images">
                        </li>
                        <li class="slide">
                            <img src="images/good_bois/boi3.jpg" class="images">
                        </li>
                        <li class="slide">
                            <img src="images/good_bois/boi4.jpg" class="images">
                        </li>
                        <li class="slide" class="images">
                            <img src="images/good_bois/boi5.jpg" class="images">
                        </li>
                    </ul> 
                </div> 
            </section> -->

            <section>
                <div class="carousel container-box-middle" data-carousel>
                    <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                    <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                    <ul data-slides>
                        <li class="slide">
                            <img src="images/good_bois/agri1.jpg" class="images">
                        </li>
                        <li class="slide" data-active>
                            <img src="images/good_bois/agri2.png" class="images">
                        </li>
                        <li class="slide">
                            <img src="images/good_bois/agri3.jpg" class="images">
                        </li>
                        <li class="slide">
                            <img src="images/good_bois/agri4.jpeg" class="images">
                        </li>
                        <li class="slide" class="images">
                            <img src="images/good_bois/agri5.jpg" class="images">
                        </li>
                    </ul>
                </div>
            </section>

            <!-- DA Services -->
            <div class="container-box da-services">
                
                <h5 class="title da-services">DA Services</h5>
                
                <div class="row">
                    <a href="bantay-presyo/BantayPresyo.php" class="icon-desc icon"><i class="fas fa-line-chart da-services"></i></a>
                    <a href="#" class="icon-desc icon"><i class="fas fa-right-left da-services"></i></a> 
                    <a href="#" class="icon-desc icon"><i class="fas fa-carrot da-services"></i></a>
                    <a href="homepage-modules/request-seeds.php" class="icon-desc icon"><i class="fas fa-seedling da-services"></i></a> 
                    <a href="homepage-modules/report-to-da.php" class="icon-desc icon"><i class="fas fa-flag da-services"></i></a>
                </div>    
                <div class="row">
                    <ul class="icon-list">
                        <li class="icon-desc">Bantay Presyo</li>
                        <li class="icon-desc">Trading Post</li>
                        <li class="icon-desc">Kadiwa Center</li>
                        <li class="icon-desc">Request Seeds</li>
                        <li class="icon-desc">Report to DA</li>
                    </ul>
                </div>
            </div> 

            <!-- Registration -->
            <div class="container-box registration">
                
                <h5 class="title registration">Registration</h5>
                
                <div class="row">
                    <a href="#" class="icon-desc icon"><i class="fas fa-id-card registration"></i></a>
                    <a href="#" class="icon-desc icon"><i class="fas fa-compress registration"></i></a> 
                    <a href="#" class="icon-desc icon"><i class="fa-solid fa-tree-city registration"></i></a> 
                </div>    

                <div class="row">
                    <ul class="icon-list">
                        <li class="icon-desc">Registry</li>
                        <li class="icon-desc">Market Matching</li>
                        <li class="icon-desc">Urban Agriculture</li>
                    </ul>
                </div>
            </div> 

            <!-- Reporting -->
            <!-- <div class="container-box reporting">
                
                <h5 class="title reporting">Reporting</h5>
                
                <div class="row">
                    <a href="#" class="icon-desc icon"><i class="fas fa-exclamation-triangle reporting"></i></a>
                    <a href="#" class="icon-desc icon"><i class="fas fa-bug reporting"></i></a> 
                    <a href="#" class="icon-desc icon"><i class="fas fa-thermometer-empty reporting"></i></a>  
                    <a href="#" class="icon-desc icon"><i class="fas fa-bolt reporting"></i></a> 
                    <a href="#" class="icon-desc icon"><i class="fas fa-ellipsis-h reporting"></i></a>  
                </div>    

                <div class="row">
                    <ul class="icon-list">
                        <li class="icon-desc">Babay ASF</li>
                        <li class="icon-desc">Pest Incident</li>
                        <li class="icon-desc">Birdflu</li>
                        <li class="icon-desc">Calamity</li>
                        <li class="icon-desc">Others</li>
                    </ul>
                </div>
            </div> --> 

            <!-- Help Tools -->
            <div class="container-box help-tools">
                
                <h5 class="title help-tools">Help and Tools</h5>
                
                <div class="row">
                    <a href="#" class="icon-desc icon"><i class="fas fa-headset help-tools"></i></a>
                    <a href="#" class="icon-desc icon"><i class="fas fa-circle-question help-tools"></i></a> 
                    <a href="#" class="icon-desc icon"><i class="fas fa-gear help-tools"></i></a> 
                    <a href="#" class="icon-desc icon"><i class="fas fa-address-card help-tools"></i></a>   
                </div>    
                <div class="row">
                    <ul class="icon-list">
                        <li class="icon-desc">Chat with the Support</li>
                        <li class="icon-desc">Get Help</li>
                        <li class="icon-desc">Settings</li>
                        <li class="icon-desc">About Us</li>
                    </ul>
                </div>
            </div> 


        </div> 
    </div>
    <!-- main block ends -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script> 

    <!-- <script>
        const buttons = document.querySelectorAll("[data-carousel-button]")

        buttons.forEach(button => {
        button.addEventListener("click", () => {
            const offset = button.dataset.carouselButton === "next" ? 1 : -1
            const slides = button
            .closest("[data-carousel]")
            .querySelector("[data-slides]")

            const activeSlide = slides.querySelector("[data-active]")
            let newIndex = [...slides.children].indexOf(activeSlide) + offset
            if (newIndex < 0) newIndex = slides.children.length - 1
            if (newIndex >= slides.children.length) newIndex = 0

            slides.children[newIndex].dataset.active = true
            delete activeSlide.dataset.active
            })
        })
    </script> -->

</body> 
</html>

<!-- https://fontawesome.com/v4/icons/ -->
<!-- https://fontawesome.com/v4/examples/ --> 

