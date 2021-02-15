<?php
include('connect.php');
?>

<?php
    $sql = "SELECT * FROM `the 'users'`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="1px">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Gender</th>
				<th>City</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			// while($row = $result->fetch_array())
			while($row = $result->fetch_assoc()){?>
			<tr>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
				<td><a href="edit.php?id=<?php echo $row['id']?>">
				<input type="button" value="Update" style="padding-left: 10px; background-color: red; color:white"></a></td>
			    <td><input onclick="deleteme(<?php echo $row['id']?>)" style="padding-left: 10px; background-color: red; color:white" type="button" value="Delete"></td>
            </tr>

            <script type="text/javascript">
           
           function deleteme(id)
           {
           	if(confirm("Are you sure you want to delete this record?")){
           		window.location.href='delete.php?id='  +id+' '; 
           		return true;          
            	}
           }
         </script>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>User Details</title>
    </head>
<body>

</body>
</html>



