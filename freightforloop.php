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
			//The for loop sets the initial value, test condition, and incremental value
			for ($distance = 50; $distance <= 250; $distance +=50) {
			echo "<tr>
					<td style='text-align:right;'>".$distance."</td>
					<td style='text-align:right;'>".($distance / 10)."</td>
				</tr>\n";
			}
		?>
		</table>
	</body>
</html>
