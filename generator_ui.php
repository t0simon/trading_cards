<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
		<link rel="stylesheet" href="./style/material.min.css">
		<script src="./style/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<title>Karten generieren</title>
		<style>
			body {background-color: #f1f1f1; margin: 30px;}
    		</style>
	</head>
	<body>
		<h1>Karten generieren</h1>
		<form action="generieren.php" method="post">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="number" id="Anzahl" name="Anzahl">
		    <label class="mdl-textfield__label" for="Anzahl">Anzahl der Karten...</label>
		  <div class="mdl-tooltip" for="Anzahl">
		    Beispiel: 100
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="type" name="type">
		    <label class="mdl-textfield__label" for="type">Typ...</label>
		  <div class="mdl-tooltip" for="type">
		    Beispiel: Loewe
		  </div><br>
		  <button class="mdl-button mdl-js-button" id="senden">
		    Senden
		  </button>
		  <div class="mdl-tooltip" for="senden">
		    Neue Karten generieren
		  </div>
		</form>
		<br>
	</body>
</html>
