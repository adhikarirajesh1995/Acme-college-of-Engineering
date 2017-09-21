<?php 
$names=$_POST['sname'];
$dobs=$_POST['organization'];
$fathernames=$_POST['fname'];
$genders=$_POST['contact'];
$mobilenos=$_POST['mobile'];
$diplomas=$_POST['faculty'];
$addresss=$_POST['location'];
$districts=$_POST['yourdistrict'];
$seegrades=$_POST['grade'];
$con = mysqli_connect("localhost","root","","acme");
$query ="insert into admission(name,dob,fathername,gender,mobileno,diploma,address,district,seegrade) values('$names','$dobs','$fathernames','$genders','$mobilenos','$diplomas','$addresss','$districts','$seegrades')";
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