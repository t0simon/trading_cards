<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
		<link rel="stylesheet" href="./style/material.css">
		<script src="./style/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<title>Karte erstellen</title>
		<style>
			body {width: 95%; background-color: #f1f1f1; padding: 2.5%}
    		</style>
	</head>
	<body>
<div class="mdl-tabs mdl-js-tabs">
  <div class="mdl-tabs__tab-bar">
    <a href="#erstellen" class="mdl-tabs__tab">Erstellen...</a>
    <a href="#generieren" class="mdl-tabs__tab">Generieren...</a>
  </div>
  <div class="mdl-tabs__panel is-active" id="erstellen">
	<p>
		<h1>Neue Karte erstellen</h1>
		<form action="erstellen.php" method="post">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="latName" name="latName">
		    <label class="mdl-textfield__label" for="latName">wissenschaftlicher Name...</label>
		  <div class="mdl-tooltip" for="latName">
		    Beispiel: Panthera leo
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="type" name="type">
		    <label class="mdl-textfield__label" for="type">interner Name...</label>
		  <div class="mdl-tooltip" for="type">
		    Beispiel: Loewe
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="url" id="picture" name="picture">
		    <label class="mdl-textfield__label" for="picture">Bild URL...</label>
		  <div class="mdl-tooltip" for="picture">
		    Beispiel: http://example.com/Bild.png
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="name" name="name">
		    <label class="mdl-textfield__label" for="name">Anzeigename...</label>
		  <div class="mdl-tooltip" for="name">
		    Beispiel: L&amp;ouml;we
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="CustomNameDefault" name="CustomNameDefault">
		    <label class="mdl-textfield__label" for="CustomNameDefault">Standard f&uuml;r den Customname...</label>
		  <div class="mdl-tooltip" for="CustomNameDefault">
		    Beispiel: Leo
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="SizeDefault" name="SizeDefault">
		    <label class="mdl-textfield__label" for="SizeDefault">Standard f&uuml;r die Gr&ouml;&szlig;e...</label>
		    <span class="mdl-textfield__error">Bitte nur Zahlen verwenden.</span>
		  <div class="mdl-tooltip" for="SizeDefault">
		    Beispiel: 190
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="AgeDefault" name="AgeDefault">
		    <label class="mdl-textfield__label" for="AgeDefault">Standard f&uuml;r das Alter...</label>
		    <span class="mdl-textfield__error">Bitte nur Zahlen verwenden.</span>
		  <div class="mdl-tooltip" for="AgeDefault">
		    Beispiel: 10
		  </div>
		  </div><br>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <textarea class="mdl-textfield__input" type="text" rows= "3" id="Info" name="Info"></textarea>
		    <label class="mdl-textfield__label" for="Info">Infotext...</label>
		  <div class="mdl-tooltip" for="Info">
		    Beispiel: Der Löwe ist eine Art der...
		  </div>
		  </div><br>
		  <button class="mdl-button mdl-js-button" id="senden">
		    Senden
		  </button>
		  <div class="mdl-tooltip" for="senden">
		    Neue Karte erstellen
		  </div>
		</form>
		<br>
	</p>
  </div>
  <div class="mdl-tabs__panel" id="generieren">
	<p>
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
	</p>
  </div>
</div>
		<footer class="mdl-mini-footer">
		  <div class="mdl-mini-footer__left-section">
		    <ul class="mdl-mini-footer__link-list">
		      <li><a href="tabs.php">Adminbereich</a></li>
		    </ul>
		  </div>
		  <div class="mdl-mini-footer__right-section">
		    <ul class="mdl-mini-footer__link-list">
		      <li><a>Sammelkarte</a></li>
		    </ul>			
			<form action="sammelkarten.php" method="get">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="id" name="id">
			    <label class="mdl-textfield__label" for="id">ID...</label>
			    <span class="mdl-textfield__error">G&uuml;ltige ID eingeben!</span>
			  </div>
			</form>
		  </div>
		</footer>
	</body>
</html>

