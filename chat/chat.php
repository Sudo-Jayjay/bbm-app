<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chat Facility</title>
	<link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/facb9b3768.js" crossorigin="anonymous"></script>
	
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
	<!-- jQuery UI -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

	
	
	<style>

    .container{
        width: 100%;
        margin: 0px;
        padding: 0px;
    } 


    .page-wrapper{
        display: flex;
        align-content: center;
        justify-content: center;

    }
    
 

    </style>
	
<script>

</script>

<script type="text/javascript">
    function changeText(value)
    {
        document.getElementById('head-message').innerHTML = "" + value;
    }
</script>

</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal">
        <div class="modal-contents">
            <p>Select Language \ Pumili ng Wika</p>
				<!--<form action="language.php" method="post">-->
                <div class="modal-buttons">
                    <div class="modal-contents-btn1">
                        <button value="Hello there! How can I assist you today?" name="English" type="submit" id="English" onclick="myFunction1();changeText(this.value)">English</button>
                    </div>
                    <div class="modal-contents-btn2">
                        <button value="Kamusta! Paano kita matutulungan ngayong araw?" name="Tagalog" type="submit" id="Tagalog" onclick="myFunction();changeText(this.value)">Tagalog</button>
                    </div>
                </div>
				</form>
        </div>
    </div>
</div>
<!-- main block starts -->
    <div class="page-wrapper"> 
	
    <div class="wrapper">
        <div class="head-logo">
        <div class="back-button">
            <a href="../homepage.php">
                <div class="backsbutt">
                    <i class="fa-solid fa-arrow-left-long fa-1x" style="color:#FFFFFF;"></i>
                </div>
            </a>
        </div>
        <div class="logo">
        </div>
        </div>
        <div class="title">CHAT BOT</div>
            <div class="title1">Online now</div>
		<div class="suggestion1" id="soge1"> 
			<button id="suggest1" class="buttones" onclick="showOrHideDiv();"> </button>
		</div>
		<div class="suggestion2" id="soge2"> 
			<button id="suggest2" class="buttones" onclick="showOrHideDiv();"> </button>
		</div>
		<div class="suggestion3" id="soge3"> 
			<button id="suggest3" class="buttones" onclick="showOrHideDiv();"> </button>
		</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p id="head-message">...</p>
                </div>
            </div>
        </div>
		
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" name="message_box" class="form-control input-lg" placeholder="Type a Message..." onclick="showOrHideDiv();" required />
                <button id="send-btn" class="buttorn"><i class="fa-solid fa-arrow-right-long fa-1x" style="color:#FFFFFF;"></i></button>
            </div>
        </div>
    </div>
	</div>

    <script>
	
	var try1 = "";
    
	//Tagalog
    function myFunction()
    {
        var x = document.getElementById("myModal");
            if (x.style.display === "none") {
            x.style.display = "block";
            } else {
            x.style.display = "none";
            }
			
		//for Tagalog Query Button Num 1
		$(document).ready(function(){
			$.ajax({ type: "GET",
				url: "randQuesTag1.php",
				async: false,
				success : function(text)
					{
					try1 = text;
					//document.getElementById("suggest1").innnerHTML=try1;
					document.getElementById("suggest1").value=try1;
					document.querySelector('#suggest1').innerHTML = try1;
					document.querySelector('#suggest1').innerText = try1;
					document.querySelector('#suggest1').textContent = try1;
					//document.button.value = try1;
					
					}
				});
				
				$("#suggest1").on("click", function(){
					
				//$("#data").val(try1);
					
                $value = $("#suggest1").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                //$("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

			});
			
			
			//for Tagalog Query Button Num 2
		$(document).ready(function(){
			$.ajax({ type: "GET",
				url: "randQuesTag2.php",
				async: false,
				success : function(text)
					{
					try1 = text;
					//document.getElementById("suggest1").innnerHTML=try1;
					document.getElementById("suggest2").value=try1;
					document.querySelector('#suggest2').innerHTML = try1;
					document.querySelector('#suggest2').innerText = try1;
					document.querySelector('#suggest2').textContent = try1;
					//document.button.value = try1;
					
					}
				});
				
				$("#suggest2").on("click", function(){
					
				//$("#data").val(try1);
					
                $value = $("#suggest2").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                //$("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

			});
        
		//for Tagalog Query Button Num 3
		$(document).ready(function(){
			$.ajax({ type: "GET",
				url: "randQuesTag3.php",
				async: false,
				success : function(text)
					{
					try1 = text;
					//document.getElementById("suggest1").innnerHTML=try1;
					document.getElementById("suggest3").value=try1;
					document.querySelector('#suggest3').innerHTML = try1;
					document.querySelector('#suggest3').innerText = try1;
					document.querySelector('#suggest3').textContent = try1;
					//document.button.value = try1;
					
					}
				});
				
				$("#suggest3").on("click", function(){
					
				//$("#data").val(try1);
					
                $value = $("#suggest3").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                //$("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

			});	
			
		//Tagalog Type in question and give response
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
		
		//Tagalog Auto Complete Type In
		$(function() {
			$( "#data" ).autocomplete({
			source: 'process_data.php',
			
			position: {
                        my: "left bottom",
                        at: "left top"
                    }
			});
		});
			
        });
    }
    
	//English
    function myFunction1()
    {
		
        var x = document.getElementById("myModal");
            if (x.style.display === "none") {
            x.style.display = "block";
            } else {
            x.style.display = "none";
            }
		
		//for English Query Button Num 1
		$(document).ready(function(){
			$.ajax({ type: "GET",
				url: "randQuesEng1.php",
				async: false,
				success : function(text)
					{
					try1 = text;
					//document.getElementById("suggest1").innnerHTML=try1;
					document.getElementById("suggest1").value=try1;
					document.querySelector('#suggest1').innerHTML = try1;
					document.querySelector('#suggest1').innerText = try1;
					document.querySelector('#suggest1').textContent = try1;
					//document.button.value = try1;
					
					}
				});
				
				$("#suggest1").on("click", function(){
					
				//$("#data").val(try1);
					
                $value = $("#suggest1").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                //$("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message1.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

			});
			
			
			//for English Query Button Num 2
		$(document).ready(function(){
			$.ajax({ type: "GET",
				url: "randQuesEng2.php",
				async: false,
				success : function(text)
					{
					try1 = text;
					//document.getElementById("suggest1").innnerHTML=try1;
					document.getElementById("suggest2").value=try1;
					document.querySelector('#suggest2').innerHTML = try1;
					document.querySelector('#suggest2').innerText = try1;
					document.querySelector('#suggest2').textContent = try1;
					//document.button.value = try1;
					
					}
				});
				
				$("#suggest2").on("click", function(){
					
				//$("#data").val(try1);
					
                $value = $("#suggest2").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                //$("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message1.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

			});
        
	//for English Query Button Num 3
		$(document).ready(function(){
			$.ajax({ type: "GET",
				url: "randQuesEng3.php",
				async: false,
				success : function(text)
					{
					try1 = text;
					//document.getElementById("suggest1").innnerHTML=try1;
					document.getElementById("suggest3").value=try1;
					document.querySelector('#suggest3').innerHTML = try1;
					document.querySelector('#suggest3').innerText = try1;
					document.querySelector('#suggest3').textContent = try1;
					//document.button.value = try1;
					
					}
				});
				
				$("#suggest3").on("click", function(){
					
				//$("#data").val(try1);
					
                $value = $("#suggest3").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                //$("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message1.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

			});


		//English Query Type In answers
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message1.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			//English query type in auto complete
			$(function() {
			$( "#data" ).autocomplete({
			source: 'process_data1.php',
			position: {
                        my: "left bottom",
                        at: "left top"
                    }
			});
		});
			
        });
		
		
    }
	
	function showOrHideDiv() {
      var v1 = document.getElementById("soge1");
	  var v2 = document.getElementById("soge2");
	  var v3 = document.getElementById("soge3");
      if ((v1.style.display === "none") || (v2.style.display === "none") || (v3.style.display === "none")) {
		 
      } else {
         v1.style.display = "none";
		 v2.style.display = "none";
		 v3.style.display = "none";
      }
   }
   
   
    </script>
	
	

</body>
</html>