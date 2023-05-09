<?php
$idc=mysqli_connect("localhost","root","", "gacti");

$a=$_POST ['code_anim'];
$b=$_POST ['date_act'];
$c=$_POST ['nom_etat'];
$d=$_POST ['heure_rdv_act'];
$e=$_POST ['prix_act'];
$f=$_POST ['heure_debut_act'];
$g=$_POST ['heure_fin_act'];
$i=$_POST ['nom_resp_act'];
$j=$_POST ['prenom_resp_act'];




$req1 ="INSERT INTO activite (CODEANIM,DATEACT, CODEETATACT, HRRDVACT, PRIXACT, HRDEBUTACT, HRFINACT, NOMRESP, PRENOMRESP) VALUES ('$a','$b', '$c', '$d', '$e', '$f','$g','$i','$j')";
mysqli_query($idc,$req1);

header('location:affiche_anim.php');





?>