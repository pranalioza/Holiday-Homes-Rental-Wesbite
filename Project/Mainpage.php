<!Doctype html>
<html>
	<head>
		<title> StayInn </title>
		<link rel="stylesheet" type="text/css" href="mainpage1.css"/>
				<link rel="stylesheet" type="text/css" href="mainpage.css"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
 		<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="mainpage.js"></script>	

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="footer.css" rel="stylesheet" type="text/css">
		
	</head>
<body>
	<!--TOP-NAV HTML-->
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
	
	


	<div class="below-nav" id="below-nav">
		<br> <br> <br>
			<form id="search">
			<h1 tabindex="-1" class="title"> Book unique places to stay and things to do</h1>
			<br>
			<label><h4> Where <h4></label> 
			<input id="where" class="form1" placeholder="Anywhere"> <br><br>
			<label><h4> <span>Check-In </span> <h4></label> 
			<input id="datepicker1" class="form1" placeholder="dd/mm/yyyy" autocomplete="off">
			<label><h4> <span> Check-Out </span> <h4></label> 
			<input id="datepicker2" class="form1" placeholder="dd/mm/yyyy" autocomplete="offz"><br> <br>
			<label><h4>Guests</h4></label>
			<select class="form1" placeholder="Guests">
				 <div> <option value="adults"> <span class="guest"> <img src="minus.png" valign="middle" align="absmiddle" width="20px" height="20px"> Adults </span> </option> <div>
				 <span class="guest"> <option value="children"> Children </option> </span>
<!-- 				 <span class="guest"> <option value="infants"> Infants </option> </span>
 -->			</select>
		</form>
	</div>

<!--PDEM STARTS--> 
<br>
<br>
<br>
<div id="spa">
<div class="intro_airbnb_plus" id="intro_airbnb_plus" >
	<div class="intro_text" id ="intro_text1">
		<h3> 
			Introducing StayInn Plus 
		</h3>
	</div>
	<div class="intro_text" id="intro_text2">
		<p>
			A selection of places to stay verified for quality and design
		</p>
	</div>
	<div>
	<a href="plus_page.html" class="plus_logo"> <img src="explore.png"  id = "plus_img"  style="width: 1410px; height:330;margin-left: 50px;"> 
	</a>
</div>

</div>
</div>
<!--PDEM ENDS-->

<h2 id="pli">Places to stay around India</h2>
    <div id="pli1">
	  <img src="goa.jpg" width="280px" height="250px" onclick="window.open('goa.php', '_blank');">
      <span class="out" style="color: rgb(118, 118, 118);">Entire condominium<span aria-hidden="true"> · </span>Arpora</span><br><br>
      <span class="ins">
          Luxurious Woodstone Crib & Pool Jacuzzi
	  </span>
	  <br>
	  <div class="price_style">₹20,242<span style="color: dimgray;">/night</span></div>
    </div>
    <div id="pli2">
        <img src="manali.jpg" width="280px" height="250px">
        <span class="out" style="color: rgb(118, 118, 118);" >Entire apartment<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            Nature View Suites 850 sq. ft. with Rooftop Pool
		</span>
		<br>
		<div class="price_style">₹7,562<span style="color: dimgray;">/night</span></div>
    </div>
    <div id="pli3">
		<img src="adman.jpg" width="280px" height="250px">
		<span class="out" style="color: rgb(118, 118, 118);" >Entire apartment<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            Charming gardenroom with woodstove
		</span>
		<br>
		<div class="price_style">₹10,737<span style="color: dimgray;">/night</span></div>
    </div>
    <div id="pli4">
		<img src="coorg.jpg" width="280px" height="250px">
		<span class="out" style="color: rgb(118, 118, 118);" >Entire apartment<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            Romantic, Lakeside Home with Views of Lake Como
		</span>
		<br>
		<div class="price_style">₹14,989<span style="color: dimgray;">/night</span></div>
    </div>
    <h2 id="int">International Places</h2>
    <div id="int1">
			<img src="par1.jpg" width="280px" height="250px">
			<span class="out" style="color: rgb(118, 118, 118);" >Entire apartment<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            Minsk Belarus Studio in historical center
		</span>
		<br>
		<div class="price_style">₹30,190<span style="color: dimgray;">/night</span></div>
    </div>
    <div id="int2">
			<img src="dubai1.jpg" width="280px" height="250px">
			<span class="out" style="color: rgb(118, 118, 118);" >Entire apartment<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            Entire house . 2<br>The Joshua Tree House
		</span>
		<br>
		<div class="price_style">₹35,134<span style="color: dimgray;">/night</span></div>
    </div>
    <div id="int3">
			<img src="arm1.jpg" width="280px" height="250px">
			<span class="out" style="color: rgb(118, 118, 118);" >Les Issambres<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            Villa 5*. Sea view. Heated pool. Jacuzzi. Sauna.
		</span>
		<br>
		<div class="price_style">₹38,945<span style="color: dimgray;">/night</span></div>
    </div>
    <div id="int4">
			<img src="ban1.jpg" width="280px" height="250px">
			<span class="out" style="color: rgb(118, 118, 118);" >Sanur<span aria-hidden="true"> · </span>Arpora</span><br>
        <span class="ins">
            The Whitehouse - 1 bed Villa - Private Plunge Pool
		</span>
		<br>
		<div class="price_style">₹41,098<span style="color: dimgray;">/night</span></div>
    </div>

<!-- Trigger/Open The Modal -->
<button id="footer_button">Terms & Conditions, Contact Us & More </button>

<!-- The Modal -->
<div id="modal12" class="modal12">
		<footer class="footer-main">

		<span class="close12">&times;</span>
			<div class="footer-left">
          <img src="stayinn.jpg">
				<h3>Stay<span>Inn</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">StayInn Plus</a>
					|
					<a href="#">Contact Us</a>
					|
					<a href="faq.html">FAQ</a>
					|
					<a href="#">Terms & Conditions</a>
				</p>

				<p class="footer-company-name">© 2019 StayInn Inc.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>P. G. Kher Marg, (32nd Road), TPS-III
						 Off Linking Road,</span>
						 Bandra (W), Mumbai - 400050</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9768889889</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@stayinn.com">support@stayinn.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					StayInn’s mission is to create a world where people can belong through healthy travel that is local, authentic, diverse, inclusive and sustainable</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
					<a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>

</div>

<script>
// Get the modal
var modal12 = document.getElementById("modal12");

// Get the button that opens the modal
var btn = document.getElementById("footer_button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close12")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal12.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal12.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal12) {
    modal12.style.display = "none";
  }
}
</script>


<!-- JAVASCRIPT IMPORTS-->
<script>

var modal = document.getElementById('Modal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal2 = document.getElementById('mod');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}


$(function(){
    $("#datepicker1").datepicker({
        dateFormat: "dd-mm-yy"
    });
});

// $('.form1').on('click', function(e) {
//    e.preventDefault();
//    $(this).attr("autocomplete", "off");  
// });

 $("#datepicker1").datepicker()
            .focus(function() {
                $(this).prop("autocomplete", "off");
                //              return false;
            });

$(function(){
    $("#datepicker2").datepicker({
        dateFormat: "dd-mm-yy"
    });
});


function fill(Value) {
   //Assigning value to "search" div in "search.php" file.
   $('#search1').val(Value);
   //Hiding "display" div in "search.php" file.
   $('#display').hide();
}
$(document).ready(function() {
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
   $("#search1").keyup(function() {
   	console.log("hi1");
       //Assigning search box value to javascript variable named as "name".
       var name = $('#search1').val();
          	console.log("hi2");

       //Validating, if "name" is empty.
       if (name == "") {
           //Assigning empty value to "display" div in "search.php" file.
           $("#display").html("");
       }
       //If name is not empty.
       else {
       	   	console.log("hi3");

           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "ajax.php".
               url: "ajax.php",
               //Data, that will be sent to "ajax.php".
               data: {
                   //Assigning value of "name" into "search" variable.
                   search: name
               },
               //If result found, this funtion will be called.
               success: function(html) {
                   //Assigning result to "display" div in "search.php" file.
                   $("#display").html(html).show();
               }
           });
       }
   });
});


</script>
</body>
</html>
