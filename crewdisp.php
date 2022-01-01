<style>
td
{
	padding:10px;
}
</style>
<?php 			
Include ("connection.php ") ;
error_reporting (0) ;
$query = "SELECT * FROM CREW " ;
$data = mysqli_query($conn , $query) ;
$total = mysqli_num_rows ($data) ;
if($total != 0)
{
	?>
	<table>
		<tr>
			<th>Crewid</th>
			<th>Passenger aircraft id</th>
			<th>CRID</th>
			<th>Co-pilot</th>
			<th>Flight attendants</th>
			<th>Pilot</th>
			
			<th colspan="2">Operations</th>
		</tr>
	<?php
	while($result = mysqli_fetch_assoc($data) )
	{
		echo"<tr>
				<td>".$result['Crewid']."</td>
				<td>".$result['Pcraftid']."</td>
				<td>".$result['CRID']."</td>
				<td>".$result['copilot']."</td>
				<td>".$result['flightatten']."</td>
				<td>".$result['pilot']."</td>
				
				
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