<html>
<head>
	<meta http-equiv="refresh" content="0.1; URL=index.php">
</head>
<body>
	<?php
		$i = 1;
		$Anzahl = $_POST["Anzahl"];
		$type = $_POST["type"];
		mysql_connect("localhost","root","123456");
		mysql_select_db("Test");
		$Informationen = mysql_query("select * from Types where type='".$type."'");
		while ($infos = mysql_fetch_assoc($Informationen)){
			$Type = $infos["type"];
			$CustomName = $infos["CustomNameDefault"];
			$Size = $infos["SizeDefault"];
			$Age = $infos["AgeDefault"];
		}
		do {
		$einsetzen = mysql_query("INSERT INTO Items (type, CustomName, Size, Age) VALUES ('".$Type."', '".$CustomName."', '".$Size."', '".$Age."')");
		$i++;
		} while ($i<=$Anzahl);
		mysql_close();
	?>
</body>
</html>
