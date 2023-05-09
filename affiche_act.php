<?php
  session_start()
?>
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
               <link rel="stylesheet" type="text/css" href="affichage.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">
  </head>
  <body class="blue">
  <?php
    @include('menu.php');
    ?>

    <section class="parallax">
<div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-10">
<?php
$idc=mysqli_connect("localhost","root","", "gacti");
$code=$_GET['CODEANIM'];
$user=$_SESSION['nomuser'];

if ($_SESSION['typeprofil'] == 'vacancier'){
  $requete="SELECT *
  FROM activite
  WHERE (CODEETATACT='A' OR CODEETATACT='B')
  AND CODEANIM= '$code'
  AND DATEACT BETWEEN (SELECT DATEDEBSEJOUR FROM compte WHERE USER='$user')
  AND (SELECT DATEFINSEJOUR FROM compte WHERE USER='$user')";
  $resultat=mysqli_query($idc,$requete);

  if(mysqli_num_rows($resultat)==0){
    echo"Aucune activité de cette animation n'est dans vos dates de séjour";
  }

} else if ($_SESSION['typeprofil'] == 'animateur'){
$requete="SELECT *
FROM activite
INNER JOIN etat_act ON activite.CODEETATACT=etat_act.CODEETATACT
WHERE CODEANIM='$code'";
$resultat=mysqli_query($idc,$requete);

}


?>
<br><br>

<table class="table-fill">
	<tr>
		
		<th> Code animation </th>
		<th> Date de l'activite </th>
		<th> heure de rdv </th>
    <th> prix </th>
		<th> heure de début </th>
		<th> heure de fin </th>
		<th> nom </th>
		<th> prenom </th>
    <?php if ($_SESSION['typeprofil'] == 'animateur'){?>
    <th> Code de l'activite </th>
    <th> date annulation </th>
    <th>Annuler</th>
    <?php  } else if ($_SESSION['typeprofil'] == 'vacancier'){?>
      <th>Inscription</th>
    <?php }?>
		

	</tr>
<?php 
  while($enreg=mysqli_fetch_array($resultat))
      {
  ?>
    <tr>

      <td><?php echo $enreg["CODEANIM"];?></td>
      <td><?php echo $enreg["DATEACT"];?></td>
      <td><?php echo $enreg["HRRDVACT"];?></td>
      <td><?php echo $enreg["PRIXACT"];?></td>
      <td><?php echo $enreg["HRDEBUTACT"];?></td>
      <td><?php echo $enreg["HRFINACT"];?></td>
      <td><?php echo $enreg["NOMRESP"];?></td>
      <td><?php echo $enreg["PRENOMRESP"];?></td>
      <?php if ($_SESSION['typeprofil'] == 'animateur'){?>
        <td><?php echo $enreg["NOMETATACT"];?></td>
        <td><?php echo $enreg["DATEANNULEACT"];?></td>
        <td>
          <?php if($enreg["DATEANNULEACT"]==Null){
          echo"<a href='annulation.php?CODEANIM=".$enreg['CODEANIM']."& DATEACT=".$enreg['DATEACT']."'>Annulation</a>";
        }
        else{
          echo'Annulée';
        }?>
            
          </td>
      <?php  } else if ($_SESSION['typeprofil'] == 'vacancier'){?>
        <td><?php echo"<a href='inscrire_act.php?CODEANIM=".$enreg['CODEANIM']."&DATEACT=".$enreg['DATEACT']."'>Inscription</a>";?></td>
      <?php }?>
      
    </tr>	

<?php }?>

</table>
</div>
<div class="col-2">
</div>
</div>
    
     

      <img src="./Image/trees_01.png" id="t1">

      <img src="./Image/plants.png" id="plants">
    </section>

    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
    
  </body>
</html>