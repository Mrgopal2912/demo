<?php
error_reporting(1);
$servername="localhost";
$username="root";
$password="";
$dbname="unicare";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
//	echo "connection succesfull";
}

else{	
	echo "connection failed";
}


if(isset($_POST['reg']))
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comments'];

  $query=mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`,`comment`)VALUES(`$name`,`$email`,$comment)");
  echo"Your Responde is succesfully send";
  echo( mysqli_error($conn));
}
else{
	
	echo("data is not store in database");
  
}
?>
