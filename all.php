<br><br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
	<button onClick="javascript:history.go(-1)"><i class="fa fa-arrow-left" style="font-size:36px"></i></button><br><br>
	<div class="table-responsive-sm">
<table class="table table-bordered">
	<thead>
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
		</tr>
	</thead>

	<tbody>
		<?php 

		$cur_date = date("Y-m-d");



		$con= mysqli_connect("localhost","root","","login");
		$result= mysqli_query($con,"SELECT * FROM register");

		while ($row = mysqli_fetch_assoc($result)):
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

	<?php endwhile; ?>
	</tbody>
</table>
</div>
</div>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="tables/js/jquery.js"></script>
<script src="tables/js/dataTables.bootstrap.js"></script>
<script src="tables/js/jquery.dataTables.js"></script>

<script>
	$(".table").DataTable();
</script>
<style>
.dataTables_info{
	text-align: center;
}
.dataTables_paginate{
	text-align: center;
}
.dataTables_paginate a{
	padding: 2.5px;
}

</style>	
