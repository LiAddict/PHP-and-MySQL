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
	<?php
		require('header.php');
	?>
	
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
	<section>
	<h2>Welcome to the home of Krista's Auto Parts.</h2>
	<p>Please take some time to get to know us.</p>
	<p>We specialize in serving your auto needs
	and hope to hear from you soon.</p>
	</section>
	<!-- Page Footer -->
	<?php
		require('footer.php');
	?>
</body>
</html>
