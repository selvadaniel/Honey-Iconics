<?php

$con=mysqli_connect("localhost","root","","selva");
if($con){

	
	 echo " ";
	}else{
		echo "not connect";
	}




if(isset($_POST['submit'])){
$id= $_POST['id'];
$Name=$_POST['myname'];
$Email =$_POST['myemail'];
$Number=$_POST['myphone'];
$Address=$_POST['myadd'];
$Position=$_POST['mypos'];
$Experience=$_POST['myex'];
$Link=$_POST['mylink'];
$query="update honey set id='$id',name='$Name',email='$Email',mobile='$Number',address='$Address',position='$Position',experience='$Experience',resumelink='$Link' where id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo"<script>alert('record updated')</script>";
	header("location:http://localhost/king_college/HI/get%20data.php");
}
else{
	echo"failed to update";
}
}
?>
