<!doctype html>
<html>
<head>
	<title>View Whale Information Page</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="whales.css">
	<style type="text/css">
		table {
			width: 500px;
			background:white;
			color: black;
			border: 1px black solid;
			border-collapse: collapse;
			margin: auto;
		}
		td {
			border: 1px black solid;
			padding: 1px 0 1px 4 px;
			text-align: left;
		}
	</style>
</head>
<body>
	<div id="container">
		<!--Add include statements here-->
		<?php include("includes/header.php"); ?>
		<?php include("includes/nav.php"); ?>
		
			<div id="midcol">
				<h2>Whale Table Information</h2>
				<p>
					<!--Add the table here-->
				<?php
					//This script retrieves all the records from the whales table
					require ('mysqli_connect.php');		//connect to the database
					//Make the query
					$query = "SELECT whale_name, type, length, status
					FROM whales ORDER BY whale_name ASC";
					$result = @mysqli_query ($dbcon, $query);	//Run the query
				if($result) { //if it ran ok, display the records
				//Table header
				echo '<table cellpadding="5"><tr>
				<td align="left"><b>Whale Name</b></td>
				<td align="left"><b>Type</b></td>
				<td align="left"><b>Length</b></td>
				<td align="left">b>Status</b></td>
				</tr>';
				//Fetch and print all the records
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo '<tr>
					<td align="left">'.$row['whale_name'].'</td>
					<td align="left">'.$row['type'].'</td>
					<td align="left">'.$row['length'].'</td>
					<td align="left">'.$row['status'].'</td>
					</tr>';
				}
				echo '</table>';	//Close the table
				mysqli_free_result ($result);	//Free up the resources
				} else {	//If it did not run ok
					//Message
					echo '<p class="error">This whale could not be retrieved.
					Please accept our apology for any inconvenience.</p>';
					//Debugging Message
					echo '<p>'.mysqli_error($dbcon).'<br /><br />Query: '.$query.'</p>';
				}	//End of if ($result)
					mysqli_close($dbcon);	//Close the database connection
				
				?>	
					
				</p>
			</div>
	</div>
	<!--Add footer here-->
	<div id="footer">
		<footer>
			<?php include("includes/footer.php"); ?>
		</footer>
	</div>
	
</body>
</html>