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

$pass=$_POST['password'];

$link=$_POST['email'];



$q= "select * from signin where id = '$user' && password= '$pass' && email= '$link'";

$result=mysqli_query($con, $q);

$num=mysqli_num_rows($result);

if($num==1){
	echo '<script language="javascript">';
    echo 'alert("Already Registered,Please check.");';
    echo 'window.location = "index.php"';
    echo '</script>';
}else{

	$qy= "insert into signin(id,password,email)VALUES ('$user','$pass','$link')";
	
	if(mysqli_query($con,$qy))
	{
	echo '<script language="javascript">';
    echo 'alert("Registered Sucessfully.");';
    echo 'window.location = "index.php"';
    echo '</script>';
	}
	else
	{
		echo "Error: " . $qy . "" . mysqli_error($con);
	}
}


?>