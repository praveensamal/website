<?php

session_start();


$con= mysqli_connect("localhost","root","","login");

if($con){

echo "Connection Sucessful";
}else{
	echo "No Connection";
}

// mysqli_connect_db($con, 'login');

$sam=$_POST['sample'];

$drop=$_POST['dropdown'];

$mod=$_POST['model'];

$yr=$_POST['year'];

$siz=$_POST['size'];

$own=$_POST['owner'];

$use=$_POST['user'];

$loca=$_POST['loc'];

//$tipe=$_POST['period'];

$rem=$_POST['remarks'];







$q= "select * from register where sample = '$sam' && dropdown= '$drop' && model= '$mod' && year= '$yr' && size= '$siz' && owner= '$own' && user= '$use' && loc= '$loca' && remarks= '$rem'";

$result=mysqli_query($con, $q);

$num=mysqli_num_rows($result);

if($num==1){
	echo '<script language="javascript">';
    echo 'alert("This sample no. already registered.");';
    echo 'window.location = "devices.php"';
    echo '</script>';
}else{

	$qy= "insert into register (sample,dropdown,model,year,size,owner,user,loc,remarks) VALUES ('$sam','$drop','$mod','$yr','$siz','$own','$use','$loca','$rem')";
	
	if(mysqli_query($con,$qy))
	{
	echo '<script language="javascript">';
    echo 'alert("Data entered sucessfully.");';
    echo 'window.location = "devices.php"';
    echo '</script>';

	}
	else
	{
		echo "Error: " . $qy . "" . mysqli_error($con);
	}
}


?> 