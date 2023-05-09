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
        if ($_SESSION['user'] == "") { $_SESSION['user'] = 'visiteur';}
?>
  </head>
  <body>
    <header>
      <a href="#" class="logo">VVA</a>
      <nav class="">
      



            <ul class="navigation">

              <?php if($_SESSION['user'] == 'visiteur') {?>

                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>


             <?php  } else if ($_SESSION['user'] == 'vacancier'){?>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affichage_act.php">Consulter les activités</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="annulation_act.php">Annulation</a>
                  </li>
                   <form action="deconnexion.php" method="post">
                  <li class="nav-item">
                    <input type="submit" name="" value="deconnexion" class="nav-link">
                  </li>
                  </form>

              <?php  } else if ($_SESSION['user'] == 'animateur'){?>

                  <li class="nav-item">
                    <a class="" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="cree_activiter.php">Enregistrer une activité</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="finale_ajouter.php">Enregistrer une animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affichage_animation.php">Animations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affichage_act.php">Activités</a>
                  </li>
                  
                   <form action="deconnexion.php" method="post">
                  <li class="nav-item">
                    <input type="submit" name="" value="deconnexion" class="nav-link">
                  </li>
                  </form>

              <?php }?>


            </ul>
           
         
    </nav>
    </header>


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
<strong>Ajouter une activite :</strong>
<form method="post" action="ajouter_activite.php">
<table> 

<br>


<body>

<tr><td>Modif de l'animation:</td><td>
    <form action="modif.php" method="POST">
        <select name="codeanim">
        <?php 
      $idc=mysqli_connect("localhost","root","", "gacti");

        $query = "SELECT CODEANIM, NOMANIM FROM animation";
        $result = mysqli_query($idc,$query) or die(mysqli_error()."[".$query."]");
        while ($row = mysqli_fetch_array($result))
        {
            echo "<option value='".$row['CODEANIM']."'>".$row['NOMANIM']."</option>";
        }
        mysqli_close($idc);
        ?>  
       </select>
       <br>
        <div>
            <button type="submit" name="submit" value="Modifier">Modifier</button>
        </div>
    </form>

</body>




</table>
                                    


</form>
</div>
</center>

</body>
</html>
    
     
      <img src="monutain_02.png" id="m2">
      <img src="trees_01.png" id="t1">

      <img src="plants.png" id="plants">
    </section>

    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
    
  </body>
</html>