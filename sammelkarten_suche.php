<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
		<link rel="stylesheet" href="./style/material.min.css">
		<script src="./style/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<title>Sammelkarten suchen</title>
		<style>
			body {width: 95%; background-color: #f1f1f1; padding: 2.5%}
    		</style>

	</head>
	<body>
		<h1>Sammelkarte suchen</h1>
		<form action="sammelkarten.php" method="get">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="id" name="id">
		    <label class="mdl-textfield__label" for="id">ID eingeben...</label>
		    <span class="mdl-textfield__error">G&uuml;ltige ID eingeben!</span>
		  </div>
		<br><br>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
		  Senden
		</button>
		</form>
		<br>
	</body>
</html>
