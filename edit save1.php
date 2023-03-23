<?php

$con=mysqli_connect("localhost","root","","selva");
if($con){

	
	 echo " ";
	}else{
		echo "not connect";
	}




if(isset($_POST['submit'])){
$id= $_POST['id'];
$Name=$_POST['sname'];
$Email =$_POST['smail'];
$Mobile=$_POST['snum'];
$Message=$_POST['smg'];
$query="update message set id='$id',name='$Name',email='$Email',mobile='$Mobile',message='$Message' where id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo"<script>alert('record updated')</script>";
	header("location:http://localhost/king_college/HI/get%20data1.php");
}
else{
	echo"failed to update";
}
}
?>
