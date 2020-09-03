<!DOCTYPE html>
<html lang="en">
<body background="fond.JPG" TEXT= red> 

<?php
session_start ();

// print_r($_SESSION["host"] );

$host = $_SESSION ["host"];
$port = $_SESSION ["port"];
$dbname = $_SESSION ["db"];
$credentials = $_SESSION ["credentials"];


$db = pg_connect ( "$host $port $dbname $credentials" );


function addUsager($db, $idj, $pre, $nom ,$mail, $tel, $idequipe) {
	$sql = <<<EOF
		INSERT INTO RecreatifDB.Usager
		VALUES ('$idj', '$pre', '$nom','$mail', '$tel');
		
		INSERT INTO RecreatifDB.Joueur
		VALUES ('$idj','$idequipe' ,'$pre', '$nom');	

EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

addUsager($db, $_POST['IDjoueur'], $_POST['Prenom'], $_POST['Nom'],$_POST['mail'],$_POST['tel'],$_POST['IDequipe']);

pg_close ($db);
?>