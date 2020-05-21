<?php

?>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="/resources/demos/style.css">
			
  <link rel="stylesheet" href="/resources/demos/style.css">
  
        <style>
.top-nav{
	position: static;
	width: 100% ;
	height: auto;
	background-color: white;
	border-bottom: 1px solid #ccc;


}

.logo:link{
	color:#484848;
	display: inline-block;
	transition: all 0.3s ease;
}

.logo:visited{
	color: #484848;
}

/*.logo:hover{
	background-color: #f1f1f1;
}*/

.logo img{
	position: relative;
	padding: 12px 25px;
	width: 150px;
	height:80px;
	vertical-align: middle;
			border-right: 1px solid #eee;


}

/* NAV-SEARCH CSS */

#search-bar{
	width: 490px;
	height: 100%;
	display: inline-block;
	margin-left: 0;
}

.top-nav.active #search-bar{
	display: inline-block;
}
/*
.top-nav.active .logo img{
		border-right: 1px solid #ccc;

}*/

#search-bar form input{
	height: 25px;
	padding: 22px 10px 18px 52px;
	width: 100%;
	border:none;
	outline: none;
	font-size: 14px;
	box-sizing: border-box;
	background-image: url('search.jpg');
	background-repeat: no-repeat;
	background-position: 25px;
	background-size: 18px;
	margin-left: 0px;
}

#search-bar form input::-webkit-input-placeholder {
	color: #666;
}	

.clearfix::after {
	content: "";
	display: table;
	clear: both;
}

.top-nav ul{
	float: right;
	padding: 24px 0;
	box-sizing: 

}

.top-nav ul li{
	display: inline-block;
	margin: 0 30px;
}

.top-nav ul li a:link{
	color: #484848;
	font-size: 14px; 
	text-decoration: none;

}

.top-nav ul li a:visited{
	color: #484848;
	text-decoration: none;
}
.top ul li a:hover{
	color: #484848;
	text-decoration: none;
}

.top-nav.active{
	position: fixed;
	top: 0;
	left: 0;
	border-bottom: 1px solid #eee;
	box-shadow: 0 1px 5px rgba(0,0,0,0.1);
	-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.1); 

}

/*MODAL CSS STARTS*/


.container {
  padding: 16px;
}

span.psw {
  float: center;
/*  padding-top: 16px;
*/}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%;
  padding-bottom: 30px;
   /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: inline-block;
     float: center;
  }
  .cancelbtn {
     width: 100%;
  }
}

input[type=text], input[type=password] {
/*  width: 35%;
*/
  width: auto;  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  height: 20%;
}

.mod {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/*MODAL CSS ENDS
*/
 /* SLIDER */
#slider
{
	display: block;
	width:400%;
	height: 72vh;
	background-color: lightblue;
	margin-top: 0;
}

.slider-arrows{
	position: absolute;
	width: 48px;
	height: 48px;
	margin: 0 16px;
	padding: 11px 0;
	box-sizing: border-box;
	background-color: rgba(0,0,0,0.5);
	border-radius: 48px;
	top:50%;
	margin-top: -26px;
	cursor: pointer;
	transition: all 0.3s ease;
	text-align: center;
}

.slider-arrows:hover{
	background-color: rgba(0,0,0,0.8)
}

.slider-arrows span{
	color: #fff;
	font-size: 22px;
}

#left-arrow{
	left:16px;
}

#right-arrow{
	right:16px;
}

.slides-wrapper{
	position: absolute;
	width: 100%;
	height: 100%;
}

.slide{
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: #008080;
}
#text
{
  margin:0px !important;
  word-wrap:break-word !important;
  font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
  font-size:32px !important;
  font-weight:800 !important;
  line-height:1.125em !important;
  color:#484848 !important;
  padding-top:6px !important;
  padding-bottom:6px !important;
}
#spa
{
  margin-bottom: 20px;
}
.st
{
    
    margin-left: 200px;
}
.heading_style
{
	
	font-family:Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
	font-size:16px !important;
	font-weight:600 !important;
	line-height:1.375em !important;
	color:#484848 !important;
	margin-top: 40px;

}
.inside_style
{
	
	font-family:Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
	font-size:16px !important;
	font-weight:400 !important;
	line-height:1.375em !important;
	color:#484848 !important;
	margin-top: 40px;

}
hr {
    height: 1px;
	color: #484848;
    width: 500px;
	margin-left: 10px;
	border-top: 1px solid #dfcccc;

}
.style_font
{
	font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
	font-size:16px !important;
	font-weight:400 !important;
	line-height:1.375em !important;

}
.img-hover-zoom {
  height: 400px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
  padding-left: 50px;
  padding-right: 3px;
}

/* [2] Transition property for smooth transformation of images */
.img-hover-zoom img {
  transition: transform .2s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
.img-hover-zoom:hover img {
  transform: scale(1.1);
}
.img-hover-zoom1
{
	margin-left: 900px;
	margin-top:-400px;
}
.img-hover-zoom1 {
  height: 1100px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
}

/* [2] Transition property for smooth transformation of images */
.img-hover-zoom1 img {
  transition: transform .2s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
.img-hover-zoom1:hover img {
  transform: scale(1.1);
}
.img-hover-zoom2
{
   margin-top: -900;
    margin-left: 900px;
    padding-top: 3px;
}
.img-hover-zoom2 img {
  transition: transform .2s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
.img-hover-zoom2:hover img {
  transform: scale(1.1);
}

div.sticky {
	margin-top: -600px;
	margin-left:1000px;
	margin-bottom: 200px;
	position: -webkit-sticky;
  position: sticky;

  top: 0rem;
  padding: 50px;
  font-size: 20px;
  width: 350px;
  height: 350px;
  border-style: solid;
  border-width: 0.05px;
  border-color: slategrey;
  box-shadow: 4px 5px 5px 4px #f0d3d3;
  border-radius: 5px;
  padding-bottom: 417px;
  
}
.price_style
{
	margin-top: -30px;
	font-weight:800 !important;
	color:#222222 !important;
	font-family:Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
	font-size:18px !important;
	line-height:24px !important;
	margin-left:10px;
}
.rev{
	line-height: 1.33333em !important;
	font-size: 14px !important;
	font-family: Circular, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif !important;
	margin: 0px !important;
	padding-left: 30px;
}
.hea{
	margin-top: 100px;
}
select {
        width:200px;
    }
	.btn2
	{
		color: #ffffff !important;
		background: rgb(223, 60, 71) !important;
		border-color: transparent !important;
		font-size: var(--font-button-font-size, 16px) !important;
		line-height: var(--font-button-line-height, 24px) !important;
		letter-spacing: var(--font-button-letter-spacing, normal) !important;
		font-family: var(--font-button-font-family, Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif) !important;
		text-transform: var(--font-button-text-transform, undefined) !important;
		padding-top: var(--spacing-button-vertical, 10px) !important;
		padding-bottom: var(--spacing-button-vertical, 10px) !important;
		font-weight: var(--font-bold-font-weight, 800) !important;
		padding-right: var(--unit, 8px) !important;
		padding-left: var(--unit, 8px) !important;
		box-shadow: var(--shadow-button-level0-box-shadow, none) !important;
		position: relative !important;
		transition-property: background, border-color, color !important;
		transition-duration: 0.2s !important;
		cursor: pointer !important;
		width: 100% !important;
		border-radius: 4px !important;
		border-width: 2px !important;
		border-style: solid !important;
		margin-top: 25px;
	}
</style>   


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

  	var checkin, checkout;


  $( function() {
    $( "#datepicker1" ).datepicker({
		dateFormat:"yy-mm-dd",
		onSelect: function(){
        checkin = $(this).val();
        console.log(checkin);
    }
	});
  } );  
  
  $( function() 
	{
    $( "#datepicker2" ).datepicker({
    	dateFormat:"yy-mm-dd",
    	onSelect: function(){
        checkout = $(this).val();
        console.log(checkout);
    }
    });
  }
  );

  window.onload = function(){
    document.getElementById("btn2").onclick =function(){
        myFunction();
    }
}

function myFunction() 
{
	var sel1 = document.getElementById('adult');
	var opt1 = sel1.options[sel1.selectedIndex];
	//console.log( opt1.value );

	var sel2 = document.getElementById('children');
	var opt2 = sel2.options[sel2.selectedIndex];
	//console.log( opt2.value );

	 var guest= Number(opt2.value) + Number(opt1.value);
	//console.log(guest);
	document.getElementById("guest1").innerHTML += guest + "<br />";

 
      var d1 = $('#datepicker1').datepicker('getDate');
           //console.log(d1);

      var d2 = $('#datepicker2').datepicker('getDate');
      var diff = 0;
      if (d1 && d2) {
            diff = Math.ceil((d2 - d1) / 86400000); // ms per day
      }
     console.log(diff);

     var amount = 20242* diff;
     	document.getElementById("amount1").value= amount;
     	console.log(amount);


}





</script>


</head>



<body>  
		<div class="top-nav clearfix" id="top-nav" style="height: 80px;">
		<a href="Mainpage.html" class="logo"> <img src="stayinn.jpg"/> 
		</a>
		<div id="search-bar">
			<form method="GET" action="mainpage.html">
				<input type="text" name="search1" id="search1" placeholder="Search" />
				<br>
			</form>
			<div id="display"></div>


		</div>
		<ul>
			<li class="list"><a href="#">Become a Host </a> </li>
			<li class="list"><a href="#">Help </a> </li>
			<li class="list"><a onclick="document.getElementById('mod').style.display='block'" href="#mod">Sign Up </a> </li>

			<div id="mod" class="mod">
			    <form class="modal-content animate" action="signup.php" method="post">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('mod').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="user.jpg" alt="user" class="avatar">
			    </div>

			    <div class="container">
			    	<label for="name"><b>First Name</b></label>
			      <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>
			      <br>
			      <label for="name"><b>Last Name</b></label>
			      <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>
			      <br>
			      <label for="uname"><b>Username</b></label>
			      <input type="text" placeholder="Enter Username" name="username1" id="username1" required>
			      <br>
			      <label for="psw"><b>Password</b></label>
			      <input type="password" placeholder="Enter Password" name="password1" id="password1" required>
			       <br> 
			       <label for="name"><b>Contact Number</b></label>
			      <input type="text" placeholder="Enter Contact Number" name="contact" id="contact" required>
			      <br>
			      <button type="signup" name="signup"class="signup">Sign Up</button>
			      <br> <br>
			    </div>
				<div class="container" style="background-color:#f1f1f1 width:10px;">
			     <button type="button" onclick="document.getElementById('mod').style.display='none'" class="cancelbtn">Cancel</button>
			    </div>
			  </form>
			</div>

			<li class="list"> <a onclick="document.getElementById('Modal').style.display='block'" href="#Modal">Login </a></li>
				<div id="Modal" class="modal">
			  
			  <form class="modal-content animate" action="login.php" method="post">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('Modal').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="user.jpg" alt="user" class="avatar">
			    </div>

			    <div class="container">
			      <label for="uname"><b>Username</b></label>
			      <input type="text" placeholder="Enter Username" name="username" id="username" required>
			      <br>
			      <label for="psw"><b>Password</b></label>
			      <input type="password" placeholder="Enter Password" name="password" id="password"required>
			       <br> 
			      <button type="submit" name="submit"class="submit">Login</button>
			      <br> <br>
			      <label>
			        <input type="checkbox" checked="checked" name="remember"> Remember me
			      </label>
			    </div>
				<div class="container" style="background-color:#f1f1f1 width:10px;">
			     <button type="button" onclick="document.getElementById('Modal').style.display='none'" class="cancelbtn">Cancel</button>
			      <span class="psw">Forgot <a href="#">password?</a></span>
			    </div>
			  </form>
			</div>

			</ul>
	</div>
	<div class="hea">
	<div class="img-hover-zoom">
			<img src="arm1.jpg" width="900px" height="400px">
	</div>
	
	<div class="img-hover-zoom1">
			<img src="vermont2.jpg" width="500px" height="200px">
	</div>
	<div class="img-hover-zoom2">
			<img src="air2.jpg" width="500px" height="195px">
	</div>
</div>
	<!--<div class="img-hover-zoom2">
			<img src="par1.jpg" width="900px" height="700px">
	</div>-->
    <div id="spa" class="st">
		<div>
			<h1>
		  		<span class="text">Luxurious stone villa in Crete</span>
		 	</h1>
	  	</div>
	  	<div>
			<span class="heading_style">Cave</span><br>
			<span class="inside_style">
			2 guests
			1 bedroom
			1 bed
			1 bathroom
		</span><br><br>
		<span class="heading_style">
				Evangelia is a Superhost
		</span><br>
		<span class="inside_style">
				Superhosts are experienced, highly rated hosts who are committed to providing great stays for guests.
		</span><br><br>
		<span class="heading_style">
				Great location
		</span><br>
		<span class="inside_style">
				100% of recent guests gave the location a 5-star rating.
		</span><br><br>
		<span class="heading_style">
				Sparkling clean
		</span><br>
		<span class="inside_style" style="padding-top: 14px;">
				17 recent guests said this place was sparkling clean.
		</span><br>
		  </div>
		  <hr>
		<div>
			<span class="style_font">Apartment situated below the fortress Spanjola with the central<br> position and view on the beautiful Hvar harbour and Pakleni islands!</span>
		</div>
		<hr>
		<div>
				<span class="heading_style">
						The space
				</span><br>
				<span class="style_font">
						Spend a unforgettable holiday in the enchanting surroundings of the town of Cisternino (reachable<br> from the near airports of Bari and Brindisi).
						Trullo Edera offers a heaven of peace and tranquillity,<br> set in an elevated position with a stunning view.<br>
						It's the perfect place if you like nature. You can stay under an olive tree reading a good book, you <br>can have a walk in the small country streets or go to the nearest beaches.<br>
						You can even easily visit any of the sights in Apulia such as the caves of Castellana, the trulli<br> of Alberobello, the baroque cities of Lecce and Martina Franca, the excavations of Egnazia, the zoosafari<br> of Fasano, Castel del Monte with Frederick's castle, Grottaglie famous for its ceramics,<br> Taranto, Brindisi and Lecce museums.

				</span>
			</div>
			<hr>
	</div>
	<form action="book.php" onsubmit="return false">
	<div>
		<div class="sticky" style="padding-left: 20px;">
			<div class="price_style">₹20,242<span style="color: dimgray; font-size: 14px; font-weight: 400px;">per night</span></div>
			<div class="_14hveccc" aria-hidden="true"><span class="rev">(236 reviews)</span></div>
			<div style="margin-top: 16px; margin-bottom: 16px;"><div class="line"></div></div>
			<div class="date" style="color: dimgray; font-size: 14px; font-weight: 600px;">Add dates for exact pricing</div>
			<div style="color:black; font-size: 15px; font-weight: 600px; margin-bottom: 5px;">Dates</div>
			<input id="datepicker1" placeholder=" Check-in " name="datepicker1" style="width:110px; height: 30px;">&nbsp;to&nbsp;
			<input  id="datepicker2" placeholder=" Check-out " name="datepicker2" style="width:110px; height: 30px;">
			<div style="margin-top:15px; color:dimgray; font-size: 15px; font-weight: 600px; ">
			<label for="adult">Adult</label>
    		<select id="adult" name="adult">
      		<option value="1">1</option>
     		 <option value="2">2</option>
      		<option value="3">3</option>
			</select>
		</div>

		<div style="margin-top:20px; color:dimgray; font-size: 15px; font-weight: 600px; ">
			<label for="children">Children</label>
    		<select id="children" name="children">
			<option value="0">0</option>
      		<option value="1">1</option>
     		 <option value="2">2</option>
      		<option value="3">3</option>
			</select>
		</div>
		<div id="guest1" style="margin-top:15px; color:dimgray; font-size: 18px; font-weight: 600px;">Total Number of Guest:</div>
		<div style="margin-top:15px; color:dimgray; font-size: 18px; font-weight: 600px;">Amount: <span> <input id= "amount1" name="amount2"> </input> </span> </div>
		<button class="btn2" id="btn2">Reserve</button>
</div>
</div>
<form>

	</body>
</html>













