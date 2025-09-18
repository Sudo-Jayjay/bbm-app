<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bantay Presyo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    <?php include '../header-footer-2.php';?> 

</head>
 

<style>
    .searchbar{
        width: 90%;
    }
    .fa-search{
        color:black;
    }   

    .container-box{ 
        margin-top: 15px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        border: 0.5px solid black;
        border-radius: 20px;
    }

    .row{ 
        width: 100%;
        display: flex;
        margin-left: auto;
        margin-right: auto;
        padding:20px;
    }

    .row-product{
        width: 100%;
        display: flex;
        margin-left: auto;
        margin-right: auto; 
    }

    .row-title{
        padding-left: 20px;
        padding-top: 23px;
        padding-bottom: 8px;
        background: #91c9fa;
        border-top-left-radius: 20px 20px;
        border-top-right-radius: 20px 20px;
    }

    .row-title-btn{ 
        background: #0275d8;
        border-top-left-radius: 20px 20px;
        border-top-right-radius: 20px 20px;
    }

    .card-01{
        background-color: #0f85f5;
        position: relative;
        flex-wrap: wrap;
        flex: 1;
        height: 60px;
        margin: 5px;
        border-radius: 5px;
        align-content: center;
    }

    .card-02{
        /* background-color: #ddd; */
        position: relative;
        flex-wrap: wrap;
        flex: 1;
        height: 60px;
        margin: 5px;
        border-radius: 5px;
        align-content: center;
    }

    .card-price{
        /* background-color: #ddd; */
        position: relative;
        flex-wrap: wrap;
        flex: 1;
        height: 80px; 
        border-radius: 5px; 
    }
 
    @media(max-width:800px) { 
        .card-01{  
            max-width: 100%;
            flex:100%;
        }
        .card-02{  
            max-width: 100%;
            flex:100%;
            margin: 5px;
            padding: 10px;
            height:150px; 
            /* border-bottom: .5px solid black; */

        }
    } 

    .mybtn1{
        border-top-left-radius: 20px 20px; 
        width:25%;
    }
    .mybtn2{
        border-top-right-radius: 20px 20px; 
        width:25%;
    }
    .mybtn{ 
        width:25%; 
        float:left;
    }
    .yellow{
        background-color: #fcf499;
        /* border: 0.5px solid black; */
    }
    .green{
        background-color: #96de9d;
        /* border: 0.5px solid black;  */
    }
    .red{
        background-color:#ff8c8c;
        /* border: 0.5px solid black; */
    }
    .right-price{
        width: 50%;
        float: right;
    }

    .type{
        text-align: right;
        padding-right: 7px;
        font-size: 12px;
    }

    .price-bar{
        margin: 0px;
        padding: 0px;
    }

    .barr{
        margin: 0px;
        padding: 0px;
        display: contents;
    }
    .pphoto{
        text-align:center;
    }

    .selectedbtn{
        enable:
    }

    .active{
        background-color:red;
    }

    #divPig{
        display:none;
    }

    #divVeg{
        display:none;
    }

    #divFruit{ 
        display:none;
    }

    .col-xs-4{
        font-size:14px;
    }

    .container-box{
        background:white;
    }
</style>
  

<body> 

    <!-- main block starts -->
    <div class="page-wrapper">
        <div class="container"> 
            <h3>Bantay Presyo</h3>
            <p>The easiest way to see the commodity prices all over the country.</p> 
            <input type="text" class="searchbar" placeholder="Search"> <a href="map.php"><i class="fas fa-search"></i></a>

            <div class="container-box">
                <div class="row-title-btn">
                    <button class="btn btn-primary mybtn1 mybtn" id="btnRice">Bigas</button>
                    <button class="btn btn-primary mybtn" id="btnPig">Baboy</button>
                    <button class="btn btn-primary mybtn" id="btnVeg">Gulay</button>
                    <button class="btn btn-primary mybtn2 mybtn" id="btnFruit">Prutas</button> 
                    <!-- <script>document.getElementById("selectedbtn").pressed = true;</script> --> 
                </div>

                <!-- start of divRice -->
                <div id="divRice">
                <!-- start of NFA Type  -->
                <div class="row-product">
                    <div class="card-02">
                        <div class="card-price">  
                            <div class="col-xs-3 pphoto"><img src="../images/rice.png" alt="logo" width="coversize" height="80px">NFA</div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Regmilled</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div> 

                        </div> 
                    </div>  
                </div> 
                <!-- end of NFA Type  -->

                <!-- start of Local Type  -->
                <div class="row-product">
                    <div class="card-02">
                        <div class="card-price">  
                            <div class="col-xs-3 pphoto"><img src="../images/rice.png" alt="logo" width="coversize" height="80px">Local</div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Special</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Premium</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Well-milled</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Regmilled</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>
                        </div> 
                    </div>
                </div> 
                <!-- end of Local Type  -->

                <!-- start of Imported Type  -->
                <div class="row-product">
                    <div class="card-02">
                    <div class="card-price">  
                            <div class="col-xs-3 pphoto"><img src="../images/rice.png" alt="logo" width="coversize" height="80px">Imported</div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Special</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Premium</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Well-milled</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>

                            <div class="col-xs-9 barr">
                                <div class="col-xs-3 type">Regmilled</div>
                                <div class="col-xs-6 price-bar"> 
                                    <div class="col-xs-4 yellow">50</div>
                                    <div class="col-xs-4 green">55</div>
                                    <div class="col-xs-4 red">60</div>
                                </div>   
                            </div>
                        </div> 
                    </div>  
                </div>
                <!-- end of Imported Type  -->
                </div>
                <!-- end of divRice -->

                <!-- start of divPig -->
                <div id="divPig">
                    <div class="row-product">
                        <div class="card-02">
                            <div class="card-price">  
                                <div class="col-xs-3 pphoto"><img src="../images/kasim.png" alt="logo" width="coversize" height="80px">kasim/pigue</div>
                                <div class="col-xs-9 barr">
                                    <div class="col-xs-3 type">Fresh</div>
                                    <div class="col-xs-6 price-bar"> 
                                        <div class="col-xs-4 yellow">270</div>
                                        <div class="col-xs-4 green">300</div>
                                        <div class="col-xs-4 red">330</div>
                                    </div>   
                                </div> 
                                <div class="col-xs-9 barr">
                                    <div class="col-xs-3 type">Frozen</div>
                                    <div class="col-xs-6 price-bar"> 
                                        <div class="col-xs-4 yellow">190</div>
                                        <div class="col-xs-4 green">220</div>
                                        <div class="col-xs-4 red">250</div>
                                    </div>   
                                </div>  
                            </div> 
                        </div>  
                    </div>  
                </div>
                <!-- end of divPig -->

                <!-- start of divVeg -->
                <div id="divVeg">
                    <div class="row-product">
                        <div class="card-02">
                            <div class="card-price">  
                                <div class="col-xs-3 pphoto"><img src="../images/carrots.png" alt="logo" width="coversize" height="80px">Carrots</div>

                                <div class="col-xs-9 barr">
                                    <div class="col-xs-3 type">Per kilo</div>
                                    <div class="col-xs-6 price-bar"> 
                                        <div class="col-xs-4 yellow">20</div>
                                        <div class="col-xs-4 green">35</div>
                                        <div class="col-xs-4 red">70</div>
                                    </div>   
                                </div> 

                            </div> 
                        </div>  
                    </div>  
                </div>
                <!-- end of divVeg -->

                <!-- start of divFruit -->
                <div id="divFruit">
                    <div class="row-product">
                        <div class="card-02">
                            <div class="card-price">  
                                <div class="col-xs-3 pphoto"><img src="../images/grapes.png" alt="logo" width="coversize" height="80px">Grapes</div>

                                <div class="col-xs-9 barr">
                                    <div class="col-xs-3 type">Per kilo</div>
                                    <div class="col-xs-6 price-bar"> 
                                        <div class="col-xs-4 yellow">180</div>
                                        <div class="col-xs-4 green">200</div>
                                        <div class="col-xs-4 red">220</div>
                                    </div>   
                                </div> 

                            </div> 
                        </div>  
                    </div>  
                </div>
                <!-- end of divFruit -->



            </div>
        </div> 
    </div>
    <!-- main block ends -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 

    <script> 
        const btnRice = document.getElementById("btnRice"); 
        const divRice = document.getElementById("divRice");

        const btnPig = document.getElementById("btnPig");
        const divPig = document.getElementById("divPig");

        const btnVeg = document.getElementById("btnVeg");
        const divVeg = document.getElementById("divVeg");

        const btnFruit = document.getElementById("btnFruit");
        const divFruit = document.getElementById("divFruit");
         
        btnRice.onclick = function () { 
                divRice.style.display = "block";
                divPig.style.display = "none";
                divVeg.style.display = "none";
                divFruit.style.display = "none";
        }; 

        btnPig.onclick = function () { 
                divRice.style.display = "none";
                divPig.style.display = "block";
                divVeg.style.display = "none";
                divFruit.style.display = "none";
        }; 

        btnVeg.onclick = function () {
                divRice.style.display = "none";
                divPig.style.display = "none";
                divVeg.style.display = "block";
                divFruit.style.display = "none"; 
        };

        btnFruit.onclick = function () {
                divRice.style.display = "none";
                divPig.style.display = "none";
                divVeg.style.display = "none";
                divFruit.style.display = "block"; 
        };  
    </script>

</body> 
</html>
 

