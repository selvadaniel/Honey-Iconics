<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>delete</title>
</head>
<body>
    <?php
		$id=$_GET['id'];
		if (isset($_GET['id'])){


     $con=mysqli_connect("localhost","root","","selva");
   if($con){

	
	 echo " ";
	}else{
		echo "not connect";
	}

	$convert="delete from message where id=$id";
	$result=mysqli_query($con,$convert);

	if ($result){
		echo " ";
		header('location:http://localhost/king_college/HI/get%20data1.php');
	}
	else{
		echo "unable to delete";
	}
		
	}else{
		echo "not connected";
	}	
		
?>
	

</body>
</html>
