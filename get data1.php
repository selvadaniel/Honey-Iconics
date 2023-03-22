<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recent Customer</title>
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
  margin-top: 3%;
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

<style type="text/css">
	table{
		width: 100%;
		border: 1px solid black;
		border-collapse: collapse;
	}
	tr,td,th{
		border: 1px solid black;
		padding: 20px;
		color: black;
		font-family: 'Ubuntu Mono', monospace;
	}
	th{
		background: gray;
	}
	tr:nth-child(even){
		background: gray;
	}
	tr:hover{
		background: orange;
	}
	tr:nth-child(even):hover{
     background:orange;
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
	<div id="navbar" style="width: 100%;  top: 0px; z-index:auto;">
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


<?php


$con=mysqli_connect("localhost","root","","selva");

if($con)
{
	echo " ";
	$fetch="select * from message";
	$result=mysqli_query($con,$fetch);

	?>
	<table>
		<thead>
			<tr>
				<th>sno</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE NUMBER</th>
				<th>MESSAGE</th>
				<th>ACTION</th>
			</tr>
		</thead>

<?php

	while($convert=mysqli_fetch_assoc($result))
	{


		?>
	 
					<tr>
						<td><?php echo $convert["id"] ?></td>
						<td><?php echo $convert["name"] ?></td>
						<td><?php echo $convert["email"] ?></td>
						<td><?php echo $convert["mobile"] ?></td>
						<td><?php echo $convert["message"] ?></td>
						<td><center><a href="edit data1.php?id=<?php echo $convert['id']?>"><button id="button">edit</button></a>
						<a href="delete1.php?id=<?php echo $convert['id']?>"><button id="button">delete</button></a></center></td>





						<!-- <td><center><button><a href="edit.php?<?php echo $convert['id']?>">Edit</a></button>    <button><a href="delete.php?semail=$convert['email']&sname=&convert[name]&smobile=&convert[number]&spassword=&convert[password]">Delete</a></button></center></td> -->

					</tr>
					
				 
				<?php
		
	}
	?>

	</table>

	<?php
}
else{
	echo "Not Connected";
}

?>

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



