<?php 
$your_msg=$_POST['Message'];
$your_name=$_POST['Name'];
$your_email=$_POST['Email'];
$con = mysqli_connect("localhost","root","","acme");
$query ="insert into contact(msg,name,email)values('$your_msg','$your_name','$your_email')";
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$query_result = mysqli_query($con,$query);
if($query_result){
	echo "<script>alert('Sign UP Sucessful')</script>";
	include('index.php');
}else{
	echo "Try again . Transsaction not sucessful";
	include('index.html');
}
?>