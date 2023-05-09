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
  <body>

    <?php
    @include('menu.php');
    $idc=mysqli_connect("localhost", "root", "", "gacti");
    if ($_SESSION['typeprofil'] == 'vacancier'){
    $user= $_SESSION['nomuser'];
    $requete= "select * from inscription where user = '$user' ";
    } else if ($_SESSION['typeprofil'] == 'animateur'){
      $requete="SELECT * FROM inscription";
    }
    $resultat=mysqli_query($idc,$requete);
    ?>

    <br><br>
    <?php if ($_SESSION['typeprofil'] == 'animateur'){?>
             <center><h1>Toutes les réservations</h1></center>
            <?php  } else if ($_SESSION['typeprofil'] == 'vacancier'){?>
              <center><h1>Mes réservations</h1></center>
            <?php }?>
    
<section class="parallax">
<div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-10">        <table class="table-fill">

          <tr>
            <th>Numéro de l'inscription</th>
            <th>User</th>
            <th>Code Animation</th>
            <th>Date de l'activité</th>
            <th>Date de l'inscription</th>   

            <?php if ($_SESSION['typeprofil'] == 'animateur'){?>
             <th>Inscrit</th>
            <?php  } else if ($_SESSION['typeprofil'] == 'vacancier'){?>
              <th>Annulation</th>
            <?php }?>
          </tr>


          <?php 
            while($enreg=mysqli_fetch_array($resultat))
            {
              ?>
          <tr>
            
            <td><?php echo $enreg["NOINSCRIP"]; ?></td>
            <td><?php echo $enreg["USER"]; ?></td>
            <td><?php echo $enreg["CODEANIM"]; ?></td>
            <td><?php echo $enreg["DATEACT"]; ?></td>
            <td><?php echo $enreg["DATEINSCRIP"]; ?></td>
            <td><?php 
            if ($_SESSION['typeprofil'] == 'vacancier'){
              if($enreg["DATEANNULE"]==NULL){
              echo"<a href='annulation_inscription.php?NOINSCRIP=".$enreg['NOINSCRIP']."'>Annulation</a>";
              }
              else{
              echo'Annulée';
              }
            }
            else if ($_SESSION['typeprofil'] == 'animateur'){
              if($enreg['DATEANNULE']== Null){
                echo 'Inscrit (e)';

              }
              else{

              echo'Inscription annulée';
          }
        }
            ?></td>
            <?php }?>
           
          </tr>
         
        </table>
      
        <?php
        mysqli_close($idc);?>
      </div>
    <div class="col-1"></div>
    </div>
    <?php
      if(isset($_SESSION['place'])){
        unset($_SESSION['place']);
        echo"Il n'y a plus de places";
      }
      if(isset($_SESSION['inscrit'])){
        unset($_SESSION['inscrit']);
        echo"Vous êtes déjà inscrit";
      }

    ?>
    <img src="./Image/trees_01.png" id="t1">

      <img src="./Image/plants.png" id="plants">
    </section>

    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
  </body>
</html>