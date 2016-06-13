<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.8">
		<link rel="stylesheet" href="./style/material.min.css">
		<script src="./style/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<title>SRZ-Jahresarbeit</title>
		<style>
			body {background-color: #f1f1f1; width: 95%; padding: 2.5%;}
			div.qrcode {margin-top: 25px;}
    		</style>
		<?php
			$id=$_GET["id"];
			mysql_connect("","root","123456");
			mysql_select_db("Test");
			$ItemInfo = mysql_query("select * from Items where id=".$id);
			while ($infos = mysql_fetch_assoc($ItemInfo)){
				$Type = $infos["type"];
				$CustomName = $infos["CustomName"];
				$Size = $infos["Size"];
				$Age = $infos["Age"];
			}
			$TypeInfo = mysql_query("select * from Types where type='".$Type."'");
			mysql_close;
			if ($Type==NULL) {
			echo '<meta http-equiv="refresh" content="0; URL=sammelkarten_suche.php">';
			}
		?>
		<script language="JavaScript">
			HTTP_GET_VARS=new Array();
			strGET=document.location.search.substr(1,document.location.search.length);
			if(strGET!='')
			    {
			    gArr=strGET.split('&');
			    for(i=0;i<gArr.length;++i)
			        {
			        v='';vArr=gArr[i].split('=');
			        if(vArr.length>1){v=vArr[1];}
			        HTTP_GET_VARS[unescape(vArr[0])]=unescape(v);
			        }
			    }
			 
			function GET(v)
			{
			if(!HTTP_GET_VARS[v]){return 'undefined';}
			return HTTP_GET_VARS[v];
			}
			function Name() {
			var CustomNameChanged = window.prompt("Neuen Namen eingeben:","");
			var id = GET('id');
			window.location = "name.php?name="+CustomNameChanged+"&id="+id;
			}
		</script>
	</head>
	<body>
		<?php
			while ($infos = mysql_fetch_assoc($TypeInfo)){
			$pictureURL = $infos["picture"];
			$name = $infos["name"];
			$latName = $infos["latName"];
			$Info = $infos["Info"];
			}
	echo	'<style>
		.demo-card-wide.mdl-card {
		  width: 100%;
		}
		.demo-card-wide > .mdl-card__title {
		  color: #fff;
		  height: 250px;
		  background: url("'.$pictureURL.'") center / cover;
		}
		.demo-card-wide > .mdl-card__menu {
		  color: #fff;
		}
		</style>'
		?>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    		<?php
			echo "<h2>".$name."</h2>";
		?>
  </div>
		   <div class="mdl-card__menu">
			<button id="menu" class="mdl-button mdl-js-button mdl-button--icon">
			  <i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu">
			  <a href="#" onclick="document.getElementById('qrHidden').style.display = 'initial';">
			  <li class="mdl-menu__item">QR-Code generieren</li></a>
			  <a href="#" onmouseup="Name();">
			  <li class="mdl-menu__item">Namen &auml;ndern</li></a>
			</ul>
		   </div>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Wissenschaftlicher name: <i>
<?php echo $latName; ?></i></h5>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Name: 
<?php
			$CustomNameChanged = $_GET["CustomNameChanged"];
			if ($CustomNameChanged != NULL) {
			mysql_connect("","root","123456");
			mysql_select_db("Test");
			$einsetzen = mysql_query("UPDATE Items SET CustomName = '".$CustomNameChanged."' WHERE id = '".$id."'");
			mysql_close();
			echo 
			$CustomNameChanged;
			} else {
			echo 
			$CustomName;}
?></h5>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Gr&ouml;&szlig;e: 
<?php echo $Size; ?> cm</h5>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Alter: 
<?php echo $Age; ?> Jahre</h5>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone" style="margin-bottom: 20px">
                  <h5>Infotext: </h5>
		  <?php echo $Info; ?>
                </div>
              </div>
          </section>
</div>
<div id="qrHidden">
<style>
.demo-card-event.mdl-card {
  width: 256px;
  height: 256px;
  background: #3E4EB8;
}
.demo-card-event > .mdl-card__actions {
  border-color: rgba(255, 255, 255, 0.2);
}
.demo-card-event > .mdl-card__title {
  align-items: flex-start;
}
.demo-card-event > .mdl-card__title > h4 {
  margin-top: 0;
}
.demo-card-event > .mdl-card__actions {
  display: flex;
  box-sizing:border-box;
  align-items: center;
}
.demo-card-event > .mdl-card__actions > .material-icons {
  padding-right: 10px;
}
.demo-card-event > .mdl-card__title,
.demo-card-event > .mdl-card__actions,
.demo-card-event > .mdl-card__actions > .mdl-button {
  color: #fff;
}
</style>

<div id="qrcodeCanvas" class="demo-card-event mdl-card mdl-shadow--2dp qrcode">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="QR-Code/jquery.qrcode.js"></script>
<script type="text/javascript" src="QR-Code/qrcode.js"></script>
<script>
	jQuery("#qrcodeCanvas").qrcode(location.href);
</script>
</div>
	</body>
<foot>
<script>
document.getElementById('qrHidden').style.display = 'none';
</script>
</foot>
</html>
