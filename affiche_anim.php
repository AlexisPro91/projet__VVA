      <?php
        $idc=mysqli_connect("localhost","root","", "gacti");
        //error_reporting(0);
        session_start();
        if ($_SESSION['typeprofil'] == "") { $_SESSION['typeprofil'] = 'visiteur';}
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
  <body>
  <?php
    @include('menu.php');
    ?>
    <section class="parallax">

	<div class="row">

	<div class="col-2">
	</div>

	<div class="col-8">
	</body>
<body class="blue">
<?php
$idc=mysqli_connect("localhost","root","", "gacti");
$requete="select * from animation";
$resultat=mysqli_query($idc,$requete);
?>
<table class="table-fill">
	<tr>
		
		<th> Code animation </th>
	  <th>NOM</th>	
		<th> duree </th>
    <th> limite age </th>
		<th> tarif </th>
		<th> nombre de place </th>
		<th> description </th>
		<th> commentaire </th>
		<th> difficulte </th>
    <th>Consulter</th>

		

	</tr>
<?php while ($enreg=mysqli_fetch_array($resultat))
{
?>
<tr>

	<td><?php echo $enreg["CODEANIM"];?></td>
	<td><?php echo $enreg["NOMANIM"];?></td>
	<td><?php echo $enreg["DUREEANIM"];?></td>
  <td><?php echo $enreg["LIMITEAGE"];?></td>
	<td><?php echo $enreg["TARIFANIM"];?></td>
	<td><?php echo $enreg["NBREPLACEANIM"];?></td>
	<td><?php echo $enreg["DESCRIPTANIM"];?></td>
	<td><?php echo $enreg["COMMENTANIM"];?></td>
	<td><?php echo $enreg["DIFFICULTEANIM"];?></td>
  <td><?php echo"<a href='affiche_act.php?CODEANIM=".$enreg["CODEANIM"]."'>Voir les activites</a>";?></td>

	
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