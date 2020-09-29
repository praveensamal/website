<?php

session_start();

$con= mysqli_connect("localhost","root","","login");

if(isset($_POST['update']))
{
	$sample=$_POST['sample'];
	//echo $sample;
	$period=$_POST['period'];
	//echo $period;
	$start_date = date("Y-m-d");
	//echo $start_date;
	$end_date=Date('Y-m-d', strtotime('+'.$period.' days'));
	//echo $end_date;

	
	$query = "UPDATE `register` SET period='".$period."',start_date='".$start_date."',end_date='".$end_date."' where sample='".$sample."' ";

	$query_run = mysqli_query($con,$query);

	if($query_run)
	{
	echo '<script language="javascript">';
    echo 'alert("Data entered sucessfully.");';
    echo 'window.location = "update.php"';
    echo '</script>';
	}
	else
	{
    echo '<script language="javascript">';
    echo 'alert("Data not updated.");';
    echo 'window.location = "update.php"';
    echo '</script>';
	}
}	

 //populate this in end_date
//date('Y-m-d', strtotime('+1 day', $cur_date));
//date_add($cur_date,date_interval_create_from_date_string("1 days"));
//echo $cur_date;


?>