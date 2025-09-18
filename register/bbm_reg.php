<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<!-- The above 3 meta tags *must* come first in the head--> 
		<title>Login</title> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/facb9b3768.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
        <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
        <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
		
		
		
		<!-- Bootstrap core CSS -->
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome.min.css" rel="stylesheet">
		<link href="animsition.min.css" rel="stylesheet">
		<link href="animate.css" rel="stylesheet">
		
		
		<link href="style.css" rel="stylesheet">  
		
		<style>
			
			
		</style>
	</head>
	<body>
		
		
		<div class="page-wrapper">
			<form action="register.php" method="POST" enctype="multipart/form-data" id="form">
				<div class="form-step1" id="myDIV" style="display:block;">
					
					<div class="categsds">
						<h3> Are You?</h3>
					</div>
					<label class="containerer">Farmers or Fishers
						<input type="checkbox" id="FOF" name="categsfarms[]" value="Farmers or Fishers" onclick="newcheku();">
						<span class="checkmark" id="categsbox1"></span>
					</label>
					
					<label class="containerer">Buyer or Consumer
						<input type="checkbox" id="BOC" name="categsfarms[]" value="Buyer or Consumer" onclick="newcheku();">
						<span class="checkmark" id="categsbox2"></span>
					</label>
					
					<label class="containerer">Seller
						<input type="checkbox" id="sellie" name="categsfarms[]" value="Seller" onclick="newcheku();">
						<span class="checkmark" id="categsbox3"></span>
					</label>
					
					<label class="containerer">DA Employee
						<input type="checkbox" id="DAE" name="categsfarms[]" value="DA Employee" onclick="newcheku();">
						<span class="checkmark" id="categsbox4"></span>
					</label>
					<div class="tryets">
					<label class="containerer">Skip
						<input type="checkbox" id="nan" name="categsfarms[]" value="" checked>
						<span class="checkmark" id="categsbox5"></span>
					</label>
					</div>
					<!--
						<input type="text" name="email" placeholder="Email Address"><br>
					<input type="password" name="password" placeholder="Password">-->
					
				</div>
				
				<div class="form-step2" id="myDIV2" style="display:none;">
					
					<div class="proflock">
						<h3> Profile</h3>
					</div>
					<div class="fnameloc">
						<input type="text" placeholder="First Name" name="fname"  id="fname" oninput='fnamchecks();'>
						<p id="userfnam"></p>
						<div class="span1" id="spam1" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span2" id="spam2"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="mnameloc">
						<input type="text" placeholder="Middle Name" name="mname" id="mname" >
						<p id="usermnam"></p>
					</div>
					
					<div class="lnameloc">
						<input type="text" placeholder="Last Name" name="lname" id="lname" oninput='lnamchecks();'>
						<p id="userlnam"></p>
						<div class="span5" id="spam5" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span6" id="spam6"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="enameloc">
						<input type="text" placeholder="Extension Name (eg. Sr., Jr.)" name="ename" id="ename">
						<p id="userenam"></p>
					</div>
					
					<div class="unameloc">
						<input type="text" placeholder="Username" name="uuname" id="uuname" oninput='uunamchecks();'>
						<p id="useruunam"></p>
						<div class="span7" id="spam7" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span8" id="spam8"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="pworduloc">
							
						<input type="password" placeholder="Password" name="ppwordu" id="ppwordu" oninput='ppwordchecks();'>
						<p id="userFPassrod"></p>
						<div class="span101" id="spam101"> <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span102" id="spam102"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="notiece">
								<h6>(ang password ay dapat naglalaman ng walo(8) or mahigit na numero or karakter)</h6>
							</div>
					
					
					<div class="Gendslock" id="gendeyt1">
						<h5> Gender</h5>
					</div>
					
					<div class="gendsz1" id="gendeyt2">
						<label class="gendear1">Male
							<input type="radio" class ="radio" id="gendzsz1" name ="genderz[]" value="Male" onclick="gendnamchecks();">
							<span class="gendsmarks" id ="gendeyt3"></span>
						</label>
					</div>
					
					<div class="gendsz3" id ="gendeyt4"> 
						<label class="gendear2">Female
							<input type="radio" class ="radio" id="gendzsz2" name ="genderz[]" value="Female" onclick="gendnamchecks();" >
							<span class="gendsmarks1" id ="gendeyt5"></span>
						</label>
					</div>
					
					
					
					<div class="dblock">
						<input type="date" name="dateofbirth" id="dateofbirth" class="personali5" oninput='birthdateses();'>
						<div class="span9" id="spam9" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span10" id="spam10"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="pblock">
						<input type="tel" id="phone" name="phone" placeholder="09xxxxxxxxx" pattern="[0-9]{11}" onkeyup="phonenamchecks();">
						<div class="span11" id="spam11" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span12" id="spam12"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="emailock">
						<input type="text" placeholder="Email Address" autocomplete="off" name="uemail" id="uemail" oninput="emailnamchecks();">
						<div class="span13" id="spam13" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span14" id="spam14"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</div>
					
					<div class="addlock">
						<h4> Address</h4>
					</div>
					
					<div class="regionlock">
						<td><select class ="reglak" id="region" name="regiregi" onclick="provnamchecks();">
							<p id="myregigi"></p>
							<option value="Region">Region</option>
						</select></td>
						<div class="span15" id="spam15" > <i class="fa-regular fa-circle-check fa-color"></i></div>
						<div class="span16" id="spam16"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
					</select>
				</div>
				
				<div class="provlock">
					<td><select class="provlak" id="province" name="provideit" onclick="provnamchecks();">
						<option value="Province">Province</option>
					</select></td>
				</select>
				
			</select>
		</div>
		
		<div class="citylock">
			<td><select class="citlak" id="city" name="citiet">
				<option value="City">City</option>
			</select></td>
			
		</select>
	</div>
	
	<div class="bargaylock">
		<td><select class="barglak" id="barangay" name="barangaeit">
			<option value="Barangay">Barangay</option>
		</select></td>
	</select>
</div>

<div class="Howlock">
	<input type="text" placeholder="House Number / Blk Lot / Street" autocomplete="off" name="haulack" id="haulack" oninput="haunamlack();">
	<p id="userhnam"></p>
	<div class="span23" id="spam23"> <i class="fa-regular fa-circle-check fa-color"></i></div>
	<div class="span24" id="spam24"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
</div>
</div>

<div class="form-step3" id="myDIV3"style="display:none;">
	
	<div class="selvallock">
		<h7>Select Valid Id</h7>
	</div>
	
	<div class="selsvalock">
		<select class = "selsvalak" name="selsvalchows[]" id="selsz1" onclick = "idnamlack();">
			<option value="Select Valid ID" Selected Disabled>Select Valid ID</option>
			<option value="Umid ID / SSS ID">Umid ID/SSS ID</option>
			<option value="Tin ID">Tin ID</option>
			<option value="Phil Health Card">Phil Health Card</option>
			<option value="Driver's License">Driver's License</option>
			<option value="Passport">Passport</option>
			<option value="Student's ID">Student's ID</option>
			<option value="Voters ID">Voter's Id</option>
			<option value="Pagibig ID">Pagibig ID</option>
			<option value="Postal ID">Postal ID</option>
			<option value="PRC ID">PRC ID</option>
		</option>
	</select>
	</div>

	<div class="gabayshe">
	 <h9 id="gabayshe1"></h9>
	</div>

<div class="idnamlock">
	<input type="text" placeholder="" autocomplete="off" name="idnamlike" id="idnamlike" oninput="idnamlack();" disabled >
	<p id="useridval"></p>
	<div class="span25" id="spam25"> <i class="fa-regular fa-circle-check fa-color"></i></div>
	<div class="span26" id="spam26"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
</div>

<input type="file" id="image-source" accept="*/*" style="display:none" name="image1" onchange="previewImage();" accept=".jpg,.jpeg,.png" >

<div class="phototolock">
	<h8> My Photo</h8>
</div>

<input type="file" id="image-source2" accept="*/*" style="display:none" name="image2" onchange="previewImage2();" accept=".jpg,.jpeg,.png" >

</div>

<div class="form-step4" id="myDIV4">
	
	<div class="revdetlock">
		<h7>Review Details</h7>
	</div>
	
	<div class="impp1">
		<img id="image-preview2" alt="Profile" class="autosizez" src="noprof.png" style="width: 120px"/>
		
	</div>
	
	<div class="firstprevlock">
		<h7>First Name</h7>
	</div>
	
	<div class="previewshes1">
		<input type="text" id="myText1">
	</div>
	
	<div class="midprevlock">
		<h7>Middle Name</h7>
	</div>
	
	<div class="previewshes2">
		<input type="text" id="myText2">
	</div>
	
	
	<div class="lastprevlock">
		<h7>Last Name</h7>
	</div>
	
	<div class="previewshes3">
		<input type="text" id="myText3">
	</div>
	
	
	<div class="exprevlock">
		<h7>Extension Name</h7>
	</div>
	
	<div class="previewshes4">
		<input type="text" id="myText4">
	</div>
	
	<div class="userprevlock">
		<h7>Username</h7>
	</div>
	
	<div class="previewshes5">
		<input type="text" id="myText5">
	</div>
	
	<div class="gendprevlock">
		<h7>Gender</h7>
	</div>
	
	<div class="previewshes6">
		<input type="text" id="myText6">
	</div>
	
	
	<div class="birthprevlock">
		<h7>Birth date</h7>
	</div>
	
	<div class="previewshes7">
		<input type="text" id="myText7">
	</div>
	
	<div class="contprevlock">
		<h7>Contact Number</h7>
	</div>
	
	<div class="previewshes8">
		<input type="text" id="myText8">
	</div>
	
	
	
	<div class="emprevlock">
		<h7>Email Address</h7>
	</div>
	<div class="previewshes9">
		<input type="text" id="myText9">
	</div>
	
	
	
	<!-- second part -->
	
	<div class="addprevlock">
		<h7>Address</h7>
	</div>
	
	<div class="regprevlock">
		<h7>Region</h7>
	</div>
	
	<div class="previewshes10">
		<input type="text" id="myText10" name="textit10">
	</div>
	
	<div class="provlockk">
		<h7>Province</h7>
	</div>
	
	<div class="previewshes14">
		<input type="text" id="myText14" name="textit14">
	</div>
	
	<div class="citprevlock">
		<h7>City</h7>
	</div>
	
	<div class="previewshes11">
		<input type="text" id="myText11" name="textit11">
	</div>
	
	<div class="barprevlock">
		<h7>Barangay</h7>
	</div>
	
	<div class="previewshes12">
		<input type="text" id="myText12" name="textit12">
	</div>
	
	<div class="hosprevlock">
		<h7>House Number</h7>
	</div>
	
	<div class="previewshes13">
		<input type="text" id="myText13" >
	</div>
	
	<div class="valprevlock">
		<h7>Valid Id</h7>
	</div>
	
	<div class="impp2">
		<img id="image-preview1" alt="Valid ID" src="noval.png"  class="autosizez1" style="height:100px; width:200px;" />
		
	</div>
	
	
	
	<button id="btn10" class="button button11" >Submit</button>
	
	<div class="rectangle">
	</div>
	
</div>


</form>


<div class="hideit1" id="haydit1">
	<button id="btns1" class="button button4" onclick="document.getElementById('image-source').click()">CAPTURE VALID ID</button>
	<div class="span27" id="spam27"> <i class="fa-regular fa-circle-check fa-color"></i></div>
	<div class="span28" id="spam28"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
	
	<button id="btns2" class="button button5" onclick="document.getElementById('image-source2').click()">CAPTURE PHOTO</button>
	<div class="span29" id="spam29"> <i class="fa-regular fa-circle-check fa-color"></i></div>
	<div class="span30" id="spam30"> <i class="fa-regular fa-circle-xmark fa-color1"></i></div>
</div>

<div class="hideit2" id="haydit2">
	<button id="btn3" class="button button1" onclick="" ><i class="fa-solid fa-arrow-left-long fa-1x" style="color:#FFFFFF; "></i></button>
	<button id="btn4" class="button button2" onclick="myFunction1();"><i class="fa-solid fa-arrow-right-long fa-1x" style="color:#FFFFFF; "></i></button>
	<button id="btn11" class="button button12" onclick="myFunction7();"  > Skip</button>	
	
	<div class="progressbar11">
	</div>
	<div class="progressbar2">
	</div>
	<div class="progressbar3">
	</div>
	<div class="progressbar4">
	</div>
	
</div>

<div class="hideit3" id="haydit3">
	<button id="btn5" class="button button6" onclick="myFunction5();"><i class="fa-solid fa-arrow-left-long fa-1x" style="color:#FFFFFF;"></i></button>
	<button id="btn6" class="button button7" onclick="myFunction2();"><i class="fa-solid fa-arrow-right-long fa-1x" style="color:#FFFFFF;"></i></button>
	
	<div class="progressbar1">
	</div>
	<div class="progressbar22">
	</div>
	<div class="progressbar3">
	</div>
	<div class="progressbar4">
	</div>
</div>

<div class="hideit4" id="haydit4">
	<button id="btn7" class="button button8" onclick="myFunction6();"><i class="fa-solid fa-arrow-left-long fa-1x" style="color:#FFFFFF;"></i></button>
	<button id="btn8" class="button button9" onclick="myFunction3();"><i class="fa-solid fa-arrow-right-long fa-1x" style="color:#FFFFFF;"></i></button>
	
	<div class="progressbar1">
	</div>
	<div class="progressbar2">
	</div>
	<div class="progressbar33">
	</div>
	<div class="progressbar4">
	</div>
	
</div>

<div class="hideit5" id="haydit5">
	<button id="btn9" class="button button10" onclick="myFunction4();"><i class="fa-solid fa-arrow-left-long fa-1x" style="color:#FFFFFF;"></i></button>
	
	
	<div class="progressbars1">
	</div>
	<div class="progressbars2">
	</div>
	<div class="progressbars3">
	</div>
	<div class="progressbars44">
	</div>
</div>

</div>



<script>
	
	var x = document.getElementById("myDIV");
	var y = document.getElementById("haydit2");
	
	var z = document.getElementById("myDIV2");
	var y1 = document.getElementById("haydit3");
	
	var a = document.getElementById("myDIV3");
	var b1 = document.getElementById("haydit4");
	
	var c = document.getElementById("myDIV4");
	var d1 = document.getElementById("haydit5");
	
	
	var f1 = document.getElementById("haydit1");
	
	let verit1 = 0;
	let verit2 = 0;
	let verit3 = 0;
	let verit4 = 0;
	let verit5 = 0;
	let verit6 = 0;
	let verit7 = 0;
	let verit8 = 0;
	let verit9 = 0;
	let verit14 = 0;
	let verit15 = 0;
	let verit16 = 0;
	let verit17 = 0;
	let verit101 = 0;
	var jj1="";
	var jj2="";
	var jj3="";
	var jj4="";
	
	function ppwordchecks()
	{
		var sp101am = document.getElementById("spam101");
		var sp102am = document.getElementById("spam102");
		const pass1 = document.getElementById("ppwordu");
		var fpasswerd = document.getElementById("ppwordu").value;
		document.getElementById("userFPassrod").innerHTML = fpasswerd.length;
		
		if((fpasswerd.length <= 7)&&(fpasswerd.length >= 1))
		{
			sp101am.style.display = "none";
			sp102am.style.display = "block";
			verit101 = 0;
		}
		else if (fpasswerd.length >= 8)
		{
			sp101am.style.display = "block";
			sp102am.style.display = "none";
			verit101 = 1;
		}
		else if (fpasswerd.length == 0 )
		{
			sp101am.style.display = "none";
			sp102am.style.display = "none";
			verit101 = 0;
		}
		
		
	}
	function previewImage2(){
		
		var sp29am = document.getElementById("spam29");
		var sp30am = document.getElementById("spam30");
		
		var fileName1 = document.getElementById("image-source2").value;
        var idxDot1 = fileName1.lastIndexOf(".") + 1;
        var extFile1 = fileName1.substr(idxDot1, fileName1.length).toLowerCase();
		
		if (extFile1=="jpg" || extFile1=="jpeg" || extFile1=="png") 
		{
			
			sp29am.style.display = "block";
			sp30am.style.display = "none";
			verit17 = 1;
			
			
		}
		
		else
		{
			
			sp29am.style.display = "none";
			sp30am.style.display = "block";
			verit17 = 0;
			
		}
		
		//var checkima = document.getElementById("checku");
		
		document.getElementById("image-preview2").style.display="block";
		//checkima.style.display = "none";
		//document.getElementById('picpos1').style.color = 'black';
		var oFReader =new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source2").files[0]);
		
		oFReader.onload=function(oFREvent){
			document.getElementById("image-preview2").src=oFREvent.target.result;
			
			
		};
	}
	
	function previewImage(){
		
		var sp27am = document.getElementById("spam27");
		var sp28am = document.getElementById("spam28");
		
		var fileName = document.getElementById("image-source").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
		
		if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") 
		{
			
			sp27am.style.display = "block";
			sp28am.style.display = "none";
			verit16 = 1;
			
			
		}
		
		else
		{
			
			sp27am.style.display = "none";
			sp28am.style.display = "block";
			verit16 = 0;
			
		}
		
		//var checkima = document.getElementById("checku");
		
		document.getElementById("image-preview1").style.display="block";
		//checkima.style.display = "none";
		//document.getElementById('picpos1').style.color = 'black';
		var oFReader =new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
		
		oFReader.onload=function(oFREvent){
			document.getElementById("image-preview1").src=oFREvent.target.result;
			
			
		};
	}
	
	
	var haunamlack = function ()
	{	
		var sp23am = document.getElementById("spam23");
		var sp24am = document.getElementById("spam24");
		
		var ushrname = document.getElementById("haulack").value;
		document.getElementById("userhnam").innerHTML = ushrname.length;
		
		
		
		if(ushrname.length == 1)
		{
			
			sp23am.style.display = "none";
			sp24am.style.display = "block";
			verit14 = 0;
			
			
		}
		
		else if (ushrname.length >= 2)
		{
			
			sp23am.style.display = "block";
			sp24am.style.display = "none";
			verit14 = 1;
			
		}
		
		else if (ushrname.length == 0)
		{
			sp23am.style.display = "none";
			sp24am.style.display = "none";
			verit14 = 0;
			
		}
	}
	
	
	var idnamlack = function ()
	{	
		
		var sp25am = document.getElementById("spam25");
		var sp26am = document.getElementById("spam26");
		
		var disptexts= document.getElementById("gabayshe1");
		
		
		let humsid = /[0-9]{4}-[0-9]{7}-[0-9]{1}$/;
		let tinid = /[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{5}$/;
		let philhealthid = /[0-9]{2}-[0-9]{9}-[0-9]{1}$/;
		let licenseid = /[0-9A-Z]{3}-[0-9]{6}$/;
		let passportid = /[0-9]{9}$/;
		let pagibigid = /[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
		let postalid = /[0-9]{12}-[A-Z]{1}$/;
		let prcid = /[0-9]{8}$/;
		let votesid = /[0-9]{4}-[0-9A-Za-z]{5}-[0-9A-Za-z]{13}$/;
		
		
		const idvals = document.getElementById("idnamlike");
		
		var gendvals = document.getElementById("selsz1");
        var gendvalss = gendvals.selectedIndex;
		
		if(gendvalss == 0)
		{	
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "";
			disptexts.innerText ="";
			document.getElementById("idnamlike").disabled = true;
		}
		
		else if (gendvalss == 1)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxxx-xxxxxxx-x";
			
			disptexts.innerText = "Gabay : xxxx-xxxxxxx-x (isama ang -)";
			
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(humsid))
			{
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			else
			{
				
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 2)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxx-xxx-xxx-xxxxx";
			disptexts.innerText = "Gabay : xxx-xxx-xxx-xxxxx (isama ang -)";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(tinid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 3)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xx-xxxxxxxxx-x";
			disptexts.innerText = "Gabay : xx-xxxxxxxxx-x (isama ang -)";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(philhealthid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 4)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxx-xxxxxx";
			disptexts.innerText = "Gabay : xxx-xxxxxx (isama ang -)";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(licenseid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 5)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxxxxxxxx";
			disptexts.innerText = "Gabay : xxxxxxxxx  ";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(passportid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 6)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "";
			disptexts.innerText = "";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 7)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxxx-xxxxx-xxxxxxxxxxxxx";
			disptexts.innerText = "Gabay : xxxx-xxxxx-xxxxxxxxxxxxx (isama ang -)";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(votesid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		
		else if (gendvalss == 8)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxxx-xxxx-xxxx";
			disptexts.innerText = "Gabay : xxxx-xxxx-xxxx (isama ang -)";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(pagibigid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		else if (gendvalss == 9)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxxxxxxxxxxx-x";
			disptexts.innerText = "Gabay : xxxxxxxxxxxx- (isama ang -)";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(postalid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		else if (gendvalss == 10)
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
			document.getElementById("idnamlike").placeholder= "xxxxxxxx";
			disptexts.innerText = "Gabay : xxxxxxxx ";
			document.getElementById("idnamlike").disabled = false;
			if(idvals.value.match(prcid))
			{
				
				sp25am.style.display = "block";
				sp26am.style.display = "none";
				verit15 = 1;
			}
			else if(idvals.value =="")
			{
				sp25am.style.display = "none";
				sp26am.style.display = "none";
				verit15 = 0;
			}
			
			else
			{
				sp25am.style.display = "none";
				sp26am.style.display = "block";
				verit15 = 0;
			}
		}
		else
		{
			sp25am.style.display = "none";
			sp26am.style.display = "none";
		}
	}
	
	
	function regnamchecks()
	{	
		var sp15am = document.getElementById("spam15");
		var sp16am = document.getElementById("spam16");
		if (verit9 == 0)
		{
			sp15am.style.display = "none";
			sp16am.style.display = "block";
		}
		else if (verit9 == 1)
		{
			sp15am.style.display = "block";
			sp16am.style.display = "none";
		}
	}
	
	
	
	
	var my_handlers = {
		
		fill_provinces:  function(){
			var region_code = $(this).val();
			jj1 = $("#region option:selected").text();
			$('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
			verit9 = 1;
			
			var sp15am = document.getElementById("spam15");
			var sp16am = document.getElementById("spam16");
			if (verit9 == 0)
			{
				sp15am.style.display = "none";
				sp16am.style.display = "block";
				verit9 = 0;
			}
			else if (verit9 == 1)
			{
				sp15am.style.display = "block";
				sp16am.style.display = "none";
				
			}
			
		},
		
		fill_cities: function(){
			var province_code = $(this).val();
			jj2 = $("#province option:selected").text();
			$('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
		},
		
		
		fill_barangays: function(){
			var city_code = $(this).val();
			jj3 = $("#city option:selected").text();
			$('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
		},
		
		fill_barangays1: function(){
			jj4 = $("#barangay option:selected").text();
			
		}
	};
	
	$(function(){
		$('#region').on('click', my_handlers.fill_provinces);
		//$('#region').on('change', my_handlers.fill_provinces);
		//$('#region').on('change', my_handlers.fill_cities);
		//$('#region').on('change', my_handlers.fill_barangays);
		
		$('#province').on('click', my_handlers.fill_cities);
		//$('#province').on('change', my_handlers.fill_barangays);
		
		$('#city').on('click', my_handlers.fill_barangays);
		$('#barangay').on('click', my_handlers.fill_barangays1);
		
		$('#region').ph_locations({'location_type': 'regions'});
		$('#province').ph_locations({'location_type': 'provinces'});
		$('#city').ph_locations({'location_type': 'cities'});
		$('#barangay').ph_locations({'location_type': 'barangays'});
		
		$('#region').ph_locations('fetch_list');
	});
	
	
	
	
	
	
	
	var fnamchecks = function() 
	{
		var sp1am = document.getElementById("spam1");
		var sp2am = document.getElementById("spam2");
		
		var usfnam = document.getElementById("fname").value;
		document.getElementById("userfnam").innerHTML = usfnam.length;
		
		if(usfnam.length == 1)
		{
			sp1am.style.display = "none";
			sp2am.style.display = "block";
			verit1 = 0;
			
		}
		
		else if (usfnam.length >= 2)
		{
			sp1am.style.display = "block";
			sp2am.style.display = "none";
			verit1 = 1;
			
		}
		
		else if (usfnam.length == 0)
		{
			sp1am.style.display = "none";
			sp2am.style.display = "none";
			verit1 = 0;
			
		}
		
		
	}
	

	
	var lnamchecks = function() 
	{
		var sp5am = document.getElementById("spam5");
		var sp6am = document.getElementById("spam6");
		
		var uslnam = document.getElementById("lname").value;
		document.getElementById("userlnam").innerHTML = uslnam.length;
		
		if(uslnam.length == 1)
		{
			sp5am.style.display = "none";
			sp6am.style.display = "block";
			verit3 = 0;
			
		}
		
		else if (uslnam.length >= 2)
		{
			sp5am.style.display = "block";
			sp6am.style.display = "none";
			verit3 = 1;	
		}
		
		else if (uslnam.length == 0)
		{
			sp5am.style.display = "none";
			sp6am.style.display = "none";
			verit3 = 0;	
		}
		
		
	}
	
	var uunamchecks = function() 
	{
		var sp7am = document.getElementById("spam7");
		var sp8am = document.getElementById("spam8");
		
		var uunam = document.getElementById("uuname").value;
		document.getElementById("useruunam").innerHTML = uunam.length;
		
		if(uunam.length == 1)
		{
			sp7am.style.display = "none";
			sp8am.style.display = "block";
			verit4 = 0;
			
		}
		
		else if (uunam.length >= 2)
		{
			sp7am.style.display = "block";
			sp8am.style.display = "none";
			verit4 = 1;	
		}
		
		else if (uunam.length == 0)
		{
			sp7am.style.display = "none";
			sp8am.style.display = "none";
			verit4 = 0;	
		}
		
		
	}
	
	function gendnamchecks() {
		
		var hendit1=document.getElementById("gendeyt1");
		var hendit2=document.getElementById("gendeyt2");
		var hendit3=document.getElementById("gendeyt3");
		var hendit4=document.getElementById("gendeyt4");
		var hendit5=document.getElementById("gendeyt5");
		
		var gendopt=document.getElementsByName('genderz[]');
		
		if ((gendopt[0].checked || gendopt[1].checked ))
		{
			
			hendit3.style.border = "2px solid white";
			hendit5.style.border = "2px solid white";
			
			hendit1.style.color = "white";
			hendit2.style.color = "white";
			hendit4.style.color = "white";
			verit5 = 1;
		}
		
	}
	
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
	
	
	
	function newcheku(){
		
		document.getElementById('categsbox1').style.border = "0px solid black";
		document.getElementById('categsbox2').style.border = "0px solid black";
		document.getElementById('categsbox3').style.border = "0px solid black";
		document.getElementById('categsbox4').style.border = "0px solid black";
		
		document.getElementById("nan").checked = false;
		
		var option=document.getElementsByName('categsfarms[]');
		if ((option[0].checked || option[1].checked || option[2].checked || option[3].checked))
		{
			document.getElementById("nan").checked = false;
		}
		else
		{
			document.getElementById("nan").checked = true;
		}
		
	}
	
	function myFunction1() {
		
		
		var option=document.getElementsByName('categsfarms[]');
		
		if ((option[0].checked || option[1].checked || option[2].checked || option[3].checked))
		{
			
			y1.style.display = "block";
			x.style.display = "none";
			y.style.display = "none";
			z.style.display = "block";
		}
		else if (!(option[0].checked || option[1].checked || option[2].checked || option[3].checked))
		{
			
			document.getElementById('categsbox1').style.border = "2px solid red";
			document.getElementById('categsbox2').style.border = "2px solid red";
			document.getElementById('categsbox3').style.border = "2px solid red";
			document.getElementById('categsbox4').style.border = "2px solid red";
		}
		
	}
	
	//phone//
	function phonenamchecks()
	{
		var sp11am = document.getElementById("spam11");
		var sp12am = document.getElementById("spam12");
		
		var phonesa = document.getElementById("phone");
		
		if (phonesa.value > 999999999 )
		{
			sp11am.style.display = "block";
			sp12am.style.display = "none";
			verit7 = 1;
		}
		else{
			sp11am.style.display = "none";
			sp12am.style.display = "block";
			verit7 = 0;
		}
	}
	
	//Email//
	function emailnamchecks()
	{
		var sp13am = document.getElementById("spam13");
		var sp14am = document.getElementById("spam14");
		
		const semail = document.getElementById("uemail");
		let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
		
		if(semail.value.match(regExp))
		{
			sp13am.style.display = "block";
			sp14am.style.display = "none";
			verit8 = 1;
		}
		else if(semail.value == "")
		{
			sp13am.style.display = "none";
			sp14am.style.display = "none";
			verit8 = 0;
		}
		else
		{
			sp13am.style.display = "none";
			sp14am.style.display = "block";
			verit8 = 0;
		}
	}
	
	function myFunction7() {
		
		y1.style.display = "block";
		x.style.display = "none";
		y.style.display = "none";
		z.style.display = "block";
		
	}
	
	function myFunction2() 
	{
		
		
		birthdateses();
		var sp2am = document.getElementById("spam2");
		
		var sp6am = document.getElementById("spam6");
		
		var sp8am = document.getElementById("spam8");
		
		var sp10am = document.getElementById("spam10");
		
		var sp12am = document.getElementById("spam12");
		
		var sp14am = document.getElementById("spam14");
		
		var sp16am = document.getElementById("spam16");
		
		var sp18am = document.getElementById("spam18");
		
		var sp20am = document.getElementById("spam20");
		
		var sp22am = document.getElementById("spam22");
		
		var sp24am = document.getElementById("spam24");
		
		var sp102am = document.getElementById("spam102");
		
		var hendit1=document.getElementById("gendeyt1");
		var hendit2=document.getElementById("gendeyt2");
		var hendit3=document.getElementById("gendeyt3");
		var hendit4=document.getElementById("gendeyt4");
		var hendit5=document.getElementById("gendeyt5");
		
		var gendopt=document.getElementsByName('genderz[]');
		
		
		if ((verit101 == 1) && (verit1 == 1) && (verit3 == 1) && (verit4 == 1) && (verit6 == 1) && (verit7 == 1) && (verit8 == 1) && (verit9 == 1)  && (verit14 == 1) && ((gendopt[0].checked || gendopt[1].checked )))
		{
			a.style.display = "block";
			z.style.display = "none";
			y1.style.display = "none";
			b1.style.display = "block";
			f1.style.display = "block";
			
		}
		
		else
		{
			
			if(verit1 == 0)
			{
				
				sp2am.style.display = "block";
				
				
			}
			
			
			if(verit3 == 0)
			{
				
				sp6am.style.display = "block";
				
				
			}
			
			if(verit4 == 0)
			{
				
				sp8am.style.display = "block";
				
				
			}
			
			if(!(gendopt[0].checked || gendopt[1].checked ))
			{
				
				hendit3.style.border = "2px solid red";
				hendit5.style.border = "2px solid red";
				
				hendit1.style.color = "red";
				hendit2.style.color = "red";
				hendit4.style.color = "red";
				
				
			}
			
			if (verit6 == 0)
			{
				sp10am.style.display = "block";
			}
			
			if (verit7 == 0)
			{
				sp12am.style.display = "block";
			}
			
			if (verit8 == 0)
			{
				sp14am.style.display = "block";
			}
			
			if (verit9 == 0)
			{
				sp16am.style.display = "block";
			}
			
			if(verit14 == 0)
			{
				sp24am.style.display = "block";
			}
			
			if (verit101 == 0)
			{
				sp102am.style.display = "block";
			}
			
		}
		
		
	}
	/*func3*/
	function myFunction3() {
		
		var aa1 = document.getElementById("fname").value;
		var bb1 = document.getElementById("mname").value;
		var cc1 = document.getElementById("lname").value;
		var dd1 = document.getElementById("ename").value;
		var ee1 = document.getElementById("uuname").value;
		var gg1 = document.getElementById("dateofbirth").value;
		var hh1 = document.getElementById("phone").value;
		var ii1 = document.getElementById("uemail").value;
		var kk1 = document.getElementById("haulack").value;
		var ff1 =document.getElementsByName('genderz[]');
		
		ff1.forEach((rate) => {
			if (rate.checked) {
				document.getElementById("myText6").value = rate.value;
			}
		});
		
		var sp30am = document.getElementById("spam30");
		
		var sp28am = document.getElementById("spam28");
		
		
		var sp26am = document.getElementById("spam26");
		
		
		
		if (verit15 == 1 && verit16 == 1 && verit17 == 1 )
		{
			document.getElementById("myText1").value = aa1;
			document.getElementById("myText2").value = bb1;
			document.getElementById("myText3").value = cc1;
			document.getElementById("myText4").value = dd1;
			document.getElementById("myText5").value = ee1;
			document.getElementById("myText7").value = gg1;
			document.getElementById("myText8").value = hh1;
			document.getElementById("myText9").value = ii1;
			document.getElementById("myText10").value = jj1;
			document.getElementById("myText14").value = jj2;
			document.getElementById("myText11").value = jj3;
			document.getElementById("myText12").value = jj4;
			document.getElementById("myText13").value = kk1;

			c.style.display = "block";
			a.style.display = "none";
			b1.style.display = "none";
			d1.style.display = "block";
			f1.style.display = "none";	
			
		}
		
		if (verit15 == 0)
		{
			sp26am.style.display = "block";
		}
		
		if (verit16 == 0)
		{
			sp28am.style.display = "block";
		}
		
		if (verit17 == 0)
		{
			sp30am.style.display = "block";
		}
		
		
		
		
		
		
	}
	function myFunction4() {
		
		a.style.display = "block";
		z.style.display = "none";
		y1.style.display = "none";
		b1.style.display = "block";
		c.style.display = "none";
		d1.style.display = "none";
		f1.style.display = "block";
		
	}
	
	function myFunction5() {
		
		y1.style.display = "none";
		x.style.display = "block";
		y.style.display = "block";
		z.style.display = "none";
		w.style.display = "none";
		
	}
	
	function myFunction6() {
		
		a.style.display = "none";
		z.style.display = "block";
		y1.style.display = "block";
		b1.style.display = "none";
		f1.style.display = "none";
		
	}
	
</script>
</body>
</html>