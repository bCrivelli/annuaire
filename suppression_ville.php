﻿<?php
include("connexionDB.php");		 
$ville = $_GET['objet'];
$today = date("j-n-Y à H:i:s");   
$now =time();
pg_query ($dbconn, "INSERT INTO historique (login, type, objet, heure,timestamp, id_objet) 
								VALUES ('".$_SESSION['login']."', 'suppression', 'ville',$today, $now, ".$ville." )");									
pg_query("DELETE FROM ville WHERE libelle='$ville'");
echo "<script language='javascript' type='text/javascript'> window.location.replace('modif_ville.php');	</script>";
?>

				