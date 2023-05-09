<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
      <?php
        $idc=mysqli_connect("localhost","root","", "gacti");
        //error_reporting(0);
        session_start();
        if ($_SESSION['typeprofil'] == "") { $_SESSION['typeprofil'] = 'visiteur';}
?>
  </head>
  <body>
     <?php
    @include('menu.php');
    ?>

    <section class="parallax">
  <center>
    <div>
<strong>Ajouter une animation:</strong>
<form method="post" action="ajouter_animation.php">
<table> 

<tr><td>Code de l'Animation :</td><td> <input type="text" name="code_anim" class="text"></td></tr>

<?php
$idc=mysqli_connect("localhost","root","", "gacti");

$query = "SELECT CODETYPEANIM FROM type_anim ORDER BY CODETYPEANIM DESC LIMIT  0,6";
$result = mysqli_query($idc,$query) or die(mysqli_error()."[".$query."]");
?>
<tr><td>Code de l'animation:</td><td>
<select name="type_anim">
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['CODETYPEANIM']."'>".$row['CODETYPEANIM']."</option>";
}
?>        
</td>
</select></tr>


<tr><td>Nom de l'animation :</td><td> <input type="text" name="nom_anim"></td></tr>

<tr><td>Date de creation :</td><td> <input type="date" name="date_crea_anim"></td></tr>

<tr><td>Date de validite :</td><td> <input type="date" name="date_validite_anim"></td></tr>

<tr><td>Durée de l'animation :</td><td> <input type="text" name="duree_anim"></td></tr>

<tr><td>Limite d'age :</td><td> <input type="text" name="age_anim"></td></tr>

<tr><td>Tarif :</td><td> <input type="text" name="tarif_anim"></td></tr>

<tr><td>Nombre de place :</td><td> <input type="text" name="place_anim"></td></tr>

<tr><td>Description :</td><td> <input type="text" name="description_anim"></td></tr>

<tr><td>Commentaire  :</td><td> <input type="text" name="commentaire_anim"></td></tr>

<tr><td>Difficulte :</td><td> <input type="text" name="difficulte_anim"></td></tr>

<tr>
	<br>
<td><input type="submit" name="valider" id="req1" value="Ajouter" class="bout"></td>
<td><input type="reset"  value="Effacer" class="bout" ></td>
</tr>

</table>
                                    


</form>
</div>
</center>
    
     
      <img src="monutain_02.png" id="m2">
      <img src="trees_01.png" id="t1">

      <img src="plants.png" id="plants">
    </section>

    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
    
  </body>
</html>