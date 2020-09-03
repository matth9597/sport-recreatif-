<!DOCTYPE HTML> 
<html>
<head>
<style>
input[type=text] {
	border:none;
	padding:6px 0 6px 0;
	border-radius:8px;
	background:#00ccff;
	font:bold 13px Arial;
	color:#0000cc;
	
}
input[type=submit] {
width:85px;
	height:85px;
	background:#cc0000;
	font:bold 13px Arial;
	border-radius:50%;
	border:none;
	color:#fff
	
}
</style>
</head>
<body background="fond.JPG" TEXT= #9999ff> 
 
<h1 align="center"><font size="12"><font face="Andale Mono">AJOUTER USAGER:</font></font> </h1>

<form action="addUsager.php" method="post">

<h1 align="center"><font size="3"><font face="Andale Mono">ID joueur:</font></font> </h1>
  <input type="text" name="IDjoueur" style="display:block; margin:auto;">

<h1 align="center"><font size="3"><font face="Andale Mono">PRENOM:</font></font> </h1>
  <input type="text" name="Prenom" style="display:block; margin:auto;">

<h1 align="center"><font size="3"><font face="Andale Mono">NOM:</font></font> </h1>
  <input type="text" name="Nom" style="display:block; margin:auto;">

<h1 align="center"><font size="3"><font face="Andale Mono">MAIL:</font></font> </h1>
  <input type="text" name="mail" style="display:block; margin:auto;">

<h1 align="center"><font size="3"><font face="Andale Mono">TELEPHONE:</font></font> </h1>
  <input type="text" name="tel" style="display:block; margin:auto;">

<h1 align="center"><font size="3"><font face="Andale Mono">LIGUE:</font></font> </h1>
  <input type="text" name="IDligue" style="display:block; margin:auto;"><br><br><br>
  
<h1 align="center"><font size="3"><font face="Andale Mono">ID equipe:</font></font> </h1>
  <input type="text" name="IDequipe" style="display:block; margin:auto;"><br><br><br>


<input type="submit" name="submit" value="OK" style="display:block; margin:auto;">
</form>

</body>
</html>