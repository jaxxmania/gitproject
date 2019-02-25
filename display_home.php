

<table  class="table table-responsive table-bordered">

		 <tr class="bg-primary">
		 		<th>S.No</th>
		 		<th>Title</th>
		 		<th>Description</th>
		 		<th>Edit</th>
		 		<th>Delete</th>

		 </tr>
		 <?php
		 include('../include/connect.php');
 $database = new Database();
$db = $database->getConnection();


        $sql=$fetchdata->fetchdata();
          $cnt=1;
           while($row=mysqli_fetch_array($sql))
  			{
  			?>
 			<tr>
 					<td><?php echo $cnt;?></td>
 					<td><?php echo $row['title'];?></td>
 					<td><?php echo $row['description'];?></td>
			</tr>
	
<?php $cnt=$cnt+1;} ?>

</table>













