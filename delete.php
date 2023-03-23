
<?php
		$id=$_GET['id'];
		if (isset($_GET['id'])){


     $con=mysqli_connect("localhost","root","","selva");
   if($con){

	
	 echo " ";
	}else{
		echo "not connect";
	}

	$convert="delete from honey where id=$id";
	$result=mysqli_query($con,$convert);

	if ($result){
		echo " ";
		header('location:http://localhost/king_college/HI/get%20data.php');
	}
	else{
		echo "unable to delete";
	}
		
	}else{
		echo "not connected";
	}	
		
?>
	
