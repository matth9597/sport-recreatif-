<!DOCTYPE HTML>
<html>
<head>
<style>
input[type=submit] {
border:none;
	padding:6px 0 6px 0;
	border-radius:50%;
	background:green;
	font:bold 13px Arial;
	color:yellow;
	width:160px;

	
}
</style>
</head>
<body background="fond.JPG" TEXT= maroon> 

<h1 align="center"><font size="12"><font face="Andale Mono">ATELIERS RECREATIF</font></font> </h1>
<form method="post" action="/projet/connection.php">
<input type="submit" name="connection" value="Connection" style="display:block; margin:auto;">
</form>
<br>
<form method="post" action="/projet/insertjoueur.php">
<input type="submit" name="insertjoueur" value="ajouter joueur" style="display:block; margin:auto;">
</form>
<br>
<form method="post" action="/projet/commanditaire.php">
<input type="submit" name="commanditaire" value="commanditaires" style="display:block; margin:auto;">
</form>
<br>
<form method="post" action="/projet/elaction.php">
   <input type="submit" name="elaction" value="equipes de Ligue" style="display:block; margin:auto;">
</form>
<br>
<form method="post" action="/projet/rquipeview.php">
<input type="submit" name="rquipeview" value="joueurs " style="display:block; margin:auto;">
</form>
<br>




</body>
</html>