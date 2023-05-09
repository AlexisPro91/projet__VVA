<?php
$idc=mysqli_connect("localhost","root","", "gacti");

$a=$_POST ['code_anim'];
$b=$_POST ['type_anim'];
$c=$_POST ['nom_anim'];
$d=$_POST ['date_crea_anim'];
$e=$_POST ['date_validite_anim'];
$f=$_POST ['duree_anim'];
$g=$_POST ['age_anim'];
$h=$_POST ['tarif_anim'];
$i=$_POST ['place_anim'];
$j=$_POST ['description_anim'];
$k=$_POST ['commentaire_anim'];
$l=$_POST ['difficulte_anim'];



$req1 ="INSERT INTO animation VALUES ('$a','$b', '$c', '$d', '$e', '$f','$g','$h','$i','$j','$k','$l')";
mysqli_query($idc,$req1);

header('location:affiche_anim.php');


?>