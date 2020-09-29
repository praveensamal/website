<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>  

	<style>
		body{
			background-color: grey;
		}

		table,th,td{

			border: 2px solid black;
			width: 1100px;
			background-color: lightblue;
		}

		.btn{

			width: 10%;
			height: 5%;
			font-size: 22px;
			padding: 0px;
		}
		

	</style>
</head>
<body>
	<center>

		<h1> Search By Sample ID </h1>

		<div class="container">
			<button onClick="javascript:history.go(-1)" style="float: left;"><i class="fa fa-arrow-left" style="font-size:36px;"></i></button><br><br>
			<form action="" method="POST">
				<input type="text" name="sample" class="btn"  placeholder="Sample ID" style="background-color: #fff;">
				<input type="submit" name="search" class="btn" value="search"  style="background-color: #fff;">
			</form>

			<table>
				<tr>
					<th> S_No </th>
					<th> Sample </th>
			        <th> Device Type </th>
			        <th> Model </th>
			        <th> Year </th>
			        <th> Size </th>
		         	<th> Owner </th>
			        <th> Last_User </th>
			        <th> Last_Location </th>
		        	<th> Period </th>
		        	<th> Start_Date </th>
		        	<th> End_Date </th>
		        	<th> Status </th>
		         	<th> Remarks </th>
		        </tr> <br>
		        <?php 

		        $cur_date= date("Y-m-d");

		        $con= mysqli_connect("localhost","root","","login");

		        if(isset($_POST['search']))
		        {
		        	$sample=$_POST['sample'];

		        	$query = "SELECT * FROM `register` where sample='$sample' ";
		        	$query_run = mysqli_query($con,$query);

		        	while($row = mysqli_fetch_array($query_run))
		        	{
		        		if($row['end_date']<$cur_date)
		        		{
		        			$Available= "Available";
		        		}
		        		else
		        		{
		        			$Available= "Not available";
		        		}


		        		?>

		        		<tr>
		        			<td><?php echo $row['s_no']; ?></td>
		        			<td><?php echo $row['sample']; ?></td>
			                <td><?php echo $row['dropdown']; ?></td>
			                <td><?php echo $row['model']; ?></td>
			                <td><?php echo $row['year']; ?></td>
			                <td><?php echo $row['size']; ?></td>
			                <td><?php echo $row['owner']; ?></td>
			                <td><?php echo $row['user']; ?></td>
			                <td><?php echo $row['loc']; ?></td>
			                <td><?php echo $row['period']; ?></td>
			                <td><?php echo $row['start_date']; ?></td>
			                <td><?php echo $row['end_date']; ?></td>
			                <td <?php if($Available == "Available"){echo "style='color: green;'";}else{echo "style='color: red;'";}?>><?php echo $Available ; ?></td>
			                <td><?php echo $row['remarks']; ?></td>
		        			
                        </tr>

		        		<?php


		        	} 
		        }



		        ?>



			</table>
			
		</div>
	</center>

</body>
</html>