<?php

include 'config.php';
include 'newapidataintovariable.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Air quality</title>
	<link rel="stylesheet" type="text/css" href="airdetails.css?v=<?$version?>">
</head>
<body>
	<div class="container">
	<h1>Air Quality</h1>
	<ul>
		<p>
			<span> Carbon Monoxide</span>
			<span><?php echo $coround;?></span>
		</p>
		<p>
			<span>Nitrogen dioxide</span>
			<span><?php echo $no2round;?></span>
		</p>
		<p>
			<span>Ozone</span>
			<span><?php echo $o3round;?></span>
		</p>
		<p>
			<span>Sulphur dioxide</span>
			<span><?php echo $so2round;?></span>
		</p>
	</ul>
	</div>
</body>
</html>