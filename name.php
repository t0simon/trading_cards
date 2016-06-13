<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
		<link rel="stylesheet" href="./style/material.min.css">
		<script src="./style/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<title>Namen eingeben</title>
		<style>
			body {width: 95%; background-color: #f1f1f1; padding: 2.5%}
    		</style>

	</head>
	<body>
		<h1>Namen eingeben</h1>
<?php
		$CustomName = $_GET["name"];
		$id = $_GET["id"];
	echo '<meta http-equiv="refresh" content="0; URL=sammelkarten.php?CustomNameChanged='.$CustomName.'&id='.$id.'">';
?>
	</body>
</html>
