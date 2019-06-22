<!DOCTYPE html>
<html>
	<head>
		<title>Ghazaleh's Auto Parts - Freight Costs</title>
	</head>
	<body>
		<table style="border: 0px; padding; 3px">
			<tr>
				<td style="background: #cccccc; text-align: center;">Distance</td>
				<td style="background: #cccccc; text-align: center;">Cost</td>
			</tr>
			
			<?php
			//In the do...while loop, the loop is always performed at least once
			//The test condition is performed at the end of the loop
			$distance = 50;
			do {
				echo "<tr>
					<td style='text-align:right;'>".$distance."</td>
					<td style='text-align:right;'>".($distance / 10)."</td>
				</tr>\n";
			}while($distance <= 250);
		?>
		</table>
	</body>
</html>
