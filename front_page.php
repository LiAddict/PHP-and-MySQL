<?php
	$pictures =array('brakes.png', 'headlight.png', 'spark_plug.png',
			'steering_wheel.png', 'tire.png',
			'wiper_blade.png');
	shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ghazaleh's Auto Parts</title>
</head>
<body>
	<!-- page header -->
	<header>
		<h1><center>L's Auto Parts</center></h1>
	</header>
	
	<div align="center">
		<table width="75%">
			<tr>
				<?php
					for ($i = 0; $i < 3; $i++) {
						echo "<td style=\"width: 25%; text-align: center\">
							<img src=\"photos\\";
							echo $pictures[$i];
							echo "\" height=\"75\" width=\"75\"/></td>";
					}
				?>
			</tr>
		</table>
	</div>
</body>
</html>
