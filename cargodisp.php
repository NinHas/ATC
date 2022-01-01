<style>
td
{
	padding:10px;
}
</style>
<?php 			
Include ("connection.php ") ;
error_reporting (0) ;
$query = "SELECT * FROM Cargo " ;
$data = mysqli_query($conn , $query) ;
$total = mysqli_num_rows ($data) ;
if($total != 0)
{
	?>
	<table>
		<tr>
			<th>Plane id</th>  
			<th>Source</th>
			<th>Destination</th>
			<th>Contents</th>
			<th>Weight</th>
			<th>Plane type</th>
			<th colspan="2">Operations</th>
		</tr>
	<?php
	while($result = mysqli_fetch_assoc($data) )
	{
		echo"<tr>
				<td>".$result['Cid']."</td>
				<td>".$result['source']."</td>
				<td>".$result['destination']."</td>
				<td>".$result['contents']."</td>
				<td>".$result['weight']."</td>
				<td>".$result['planetype']."</td>
				<td><a href= 'update.php?pi=$result[Cid]&sr=$result[source]&ds==$result[destination]&ct==$result[contents]&wt==$result[weight]&pt==$result[planetype]'>Edit</a></td>
				<td><a href ='delete.php?pi=$result[Cid] ' onclick='return checkdelete()'; >Delete</a></td>
			</tr>"; 
	}
} 

?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data ?') ;
}
</script>


<html>
<head> </head>
	
<body   style="background-color:powderblue;"     >
		
</body>
</html>