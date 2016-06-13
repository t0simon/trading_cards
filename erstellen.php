<html>
<head>
	<meta http-equiv="refresh" content="1; URL=index.php">
</head>
<body>
	<?php
		$type = $_POST["type"];
		$picture = $_POST["picture"];
		$name = $_POST["name"];
		$CustomNameDefault = $_POST["CustomNameDefault"];
		$SizeDefault = $_POST["SizeDefault"];
		$AgeDefault = $_POST["AgeDefault"];
		$latName = $_POST["latName"];
		$Info = $_POST["Info"];
		mysql_connect("","root","123456");
		mysql_select_db("Test");
		$einsetzen = mysql_query("INSERT INTO Types (type, picture, name, CustomNameDefault, SizeDefault, AgeDefault, latName, Info) VALUES ('".$type."', '".$picture."', '".$name."', '".$CustomNameDefault."', '".$SizeDefault."', '".$AgeDefault."', '".$latName."', '".$Info."')");
		mysql_close();
	?>
</body>
</html>
