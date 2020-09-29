<?php

session_start();

$con= mysqli_connect("localhost","root","","login");

if($con){

echo "Connection Sucessful";
}else{
	echo "No Connection";
}

// mysqli_connect_db($con, 'login');

$user=$_POST['id'];
echo $user;

$pass=$_POST['password'];

$link=$_POST['email'];






$q= "select * from signin where id = '$user' && password= '$pass' && email= '$link'";

$result=mysqli_query($con, $q);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['valid']=$user;
	header('location:home.php'); 

}else{

	//echo "<script>alert('Invalid Credentials');</script>";
	//header("location:index.php?"<script>alert('Invalid Credentials');</script>"");
	echo '<script language="javascript">';
    echo 'alert("Invalid Credentials.");';
    echo 'window.location = "index.php"';
    echo '</script>';
}


?>