	<?php

$con=mysqli_connect("localhost","root","","selva");
if($con){

	
	 echo " ";
	}else{
		echo "not connect";
	}
	$id=$_GET['id'];
    $fetch="select * from message where id=$id";
	$result=mysqli_query($con,$fetch);
   
    $convert=mysqli_fetch_assoc($result);
	if($convert){
		echo " ";
	}else{
		echo "not connect";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit data</title>
    <link rel="stylesheet" href="first.css">
</head>
<style>
.dropbtn {
  background-color: black;
  color: orange;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: white;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left: 86%;
  margin-top: 5%;
  margin-right: 3%;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;
  min-width: 160px;
  overflow: auto;
  box-shadow: 2px 8px 16px 15px rgba(5,5,5,5.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

</style>
<body>
	<div id="scroolup">
	<button onclick="topFunction()" id="myBtn" title="Go to top"><b>^</b></button>
          <script>
             let mybutton = document.getElementById("myBtn");
             window.onscroll = function() {scrollFunction()};
             function scrollFunction() {
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                 mybutton.style.display = "block";
                 } else {
                 mybutton.style.display = "none";
                  }
                 }
                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                }
          </script>
    </div>
     <div id="navbar" style="width: 100%; top: 0px; z-index:auto;">
	 <hr>
		<img src="New folder/logo.jpg">
		<ul id="navcontent">
			<li><a href="first.html"><font size="+1">HOME</font></a></li>
text-align: left
            <li><a href="first.html"><font size="+1">SERVICES</font></a></li>
text-align: left
			<li><a href="first.html"><font size="+1">ABOUT US</font></a></li>
text-align: center
			<li><a href="first.html"><font size="+1">PRODUCTS</font></a></li>
text-align: center
            <li><a href="first.html"><font size="+1">VACCANCY</font></a></li>
text-align: right
			<li><a href="first.html"><font size="+1">CONTACT US</font></a></li>
text-align: right
		</ul>
		<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><b>MENU</b></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="first.html">Home</a>
    <a href="first.html">Services</a>
    <a href="first.html">About</a>
    <a href="first.html">Products</a>
    <a href="first.html">Vaccancy</a>
    <a href="first.html">Contact</a>
  </div>
</div>

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


	</div>
	</nav>
	<header id="head"><br>
		<img src="New folder/logo1.jpg">
		<h1 id="top">HONEY</h1>
		<h1 id="top1">ICONICS</h1>
	</header>


	<form method="POST" action="edit save1.php">
	     <input type="hidden" value="<?php echo $convert['id']; ?>"name="id" required><br><br>
		<center><label><b><h3>Name </b></label><input type="text" value="<?php echo $convert['name'];?>"name="sname" required></h3><br></center>
	    <center><label><b><h3>Email  </b></label><input type="text" value="<?php echo $convert['email']; ?>" name="smail"required></h3><br></center>
		<center><label><b><h3>Number   </b></label><input type="int" value="<?php echo $convert['mobile'] ;?>"name="snum"required></h3><br></center>
		<center><label><b><h3> Message   </b> </label><input type="text" value="<?php echo $convert['message']; ?>"name="smg"required></h3><br></center>
		
		<center><input type="submit" name="submit" id="button" value="SAVE EDITS"></center>
	
</form>
<div id="footer1">
		<img src="New folder/logo1.jpg">
	<div id="content8">
		<ul>
			<li><h1><u>Subscribe Our Newsletter </u></h1></li>
			<li><h2>&plus; Email:info@honeyiconics.com<br>support@honeyiconics.com</h2></li>
			<li><h2>&plus; phone:6379453263</h2></li>
			<li><h2>&plus; Address:185/18,Ani Complex,<br>kamarajar nagar,Kara Madai,<br>Coimbatore</h2></li>
			<li><h2>&plus; Customer Care : 6384256543 </h2></li>
		</ul>
	</div>
	<div id="content9">
		<ul>
			<li><h1><u>Information</u></h1></li>
			<li><h2>&check; <a href="first.html"> HOME</a></h2></li>
			<li><h2>&check;  <a href="first.html"> About Us</a></h2></li>
			<li><h2>&check;  <a href="first.html"> Services</a></h2></li>
			<li><h2>&check;  <a href="first.html">Products </a></h2></li>
			<li><h2>&check;  <a href="first.html">Vaccancy</a></h2></li>
		</ul>
	</div>
		
	</div>
	<div id="footer">
		<center><h1 id="foot">@Copyright © 2022-2023 HONEY ICONICS</h1><br>
			<p id="foot">All Rights are reserved</p>
		<p id="foot">Desinged by Sk</p></center>
	</div>


</body>

</html>



