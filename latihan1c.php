<!DOCTYPE html>
<html>
<head>
	<title>Letters in Boxes</title>
	<style>
		.box {
			width: 50px;
			height: 50px;
			border: 1px solid black;
			display: inline-block;
			text-align: center;
			font-size: 30px;
			font-weight: bold;
			font-family: Arial, sans-serif;
		}
	</style>
</head>
<body>
	<div class="box"><?php $letter = 'A'; echo $letter; ?></div>
	<div class="box"><?php $letter = 'A'; echo $letter; ?></div>
	<div class="box"><?php $letter = 'A'; echo $letter; ?></div>
	<div class="box"><?php $letter = 'B'; echo $letter; ?></div>
	<div class="box"><?php $letter = 'B'; echo $letter; ?></div>
	<div class="box"><?php $letter = 'C'; echo $letter; ?></div>
</body>
</html>