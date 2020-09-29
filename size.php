<?php

$con= mysqli_connect("localhost","root","","login");
if(!$con){
	die('Could not connect mysql:' .mysql_error());
}

$limit = 100;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;

$size = "";

if(isset($_GET["size"]))
{
	$size = $_GET["size"];

}


if(isset($_POST['size'])) 
{
	$size=$_POST['size'];
} 

	$result = mysqli_query($con,"SELECT * FROM register where size='$size' ORDER BY s_no ASC LIMIT $start_from, $limit");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<center>


	<div class="container">
		<button onClick="javascript:history.go(-1)" style="float: left;"><i class="fa fa-arrow-left" style="font-size:36px;"></i></button><br><br>
			<form action="" method="POST">
				<label> Size :</label>
				<input type="text" name="size" placeholder="Size"><br><br>
				<input type="submit" name="search" class="btn" value="search">
			</form>


           	<table class="table table-bordered table-striped">
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

		    <thead>  
            <tbody>  
                	<?php
                	$cur_date= date("Y-m-d");   
                   while ($row = mysqli_fetch_array($result)) { 
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
				<td><?php echo $row["s_no"]; ?></td>  
				<td><?php echo $row["sample"]; ?></td>
				<td><?php echo $row["dropdown"]; ?></td> 
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
                };  
                ?>  
            </tbody> 
            </thead>

            <?php

            $result_db = mysqli_query($con,"SELECT COUNT(s_no) FROM register"); 
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            /* echo  $total_pages; */
            $pagLink = "<ul class='pagination'>";  
            for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='size.php?size=".$size."&page=".$i."'>".$i."</a></li>";	
              }
            echo $pagLink . "</ul>";  
            ?>
    

		       


	         </table>
    </div>
</center>
			

</body>
</html>