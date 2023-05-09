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
      
      <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter une animation</title>
</head>
<body>
  <center>
    <div>
<strong>Cree une activite :</strong>
<form method="post" action="ajouter_activite.php">
<table> 

<br>




<?php
$idc=mysqli_connect("localhost","root","", "gacti");
$query = "SELECT CODEANIM, NOMANIM FROM animation";
$result = mysqli_query($idc,$query);
?>
<tr><td>Code de l'animation:</td><td>
<select name="code_anim">
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['CODEANIM']."'>".$row['NOMANIM']."</option>";
}
?>  
</select>

<tr><td>Date de l'activité :</td><td> <input type="date" name="date_act"></td></tr>

<?php
$idc=mysqli_connect("localhost","root","", "gacti");

$query = "SELECT CODEETATACT FROM etat_act";
$result = mysqli_query($idc,$query);
?>
<tr><td>Etat de l'activité:</td><td>
<select name="nom_etat">
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['CODEETATACT']."'>".$row['CODEETATACT']."</option>";
}
?> 



</td>
</select></tr>


<tr><td>Heure de rendez vous de l'activité :</td><td> <input type="time" name="heure_rdv_act"></td></tr>

<tr><td>Prix de l'activité :</td><td> <input type="text" name="prix_act"></td></tr>

<tr><td>Heure de debut de l'activité :</td><td> <input type="time" name="heure_debut_act"></td></tr>

<tr><td>Heure de fin de l'activité :</td><td> <input type="time" name="heure_fin_act"></td></tr>

<tr><td>Nom du responsable :</td><td> <input type="text" name="nom_resp_act"></td></tr>

<tr><td>Prenom du responsable :</td><td> <input type="text" name="prenom_resp_act"></td></tr>





<tr>
  <br>
<td><input type="submit" name="valider" id="req1" value="Ajouter" class="bout"></td>
<td><input type="reset"  value="Effacer" class="bout" ></td>
</tr>

</table>
                                    


</form>
</div>
</center>

</body>
</html>
    
     
      <img src="./Image/monutain_02.png" id="m2">
      <img src="./Image/trees_01.png" id="t1">

      <img src="./Image/plants.png" id="plants">
    </section>

    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
    
  </body>
</html>