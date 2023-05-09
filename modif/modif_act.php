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
                      <a class="nav-link" href="page_test.php">Connexion</a>
                    </li>


             <?php  } else if ($_SESSION['user'] == 'vacancier'){?>

                  <li class="nav-item">
                    <a class="active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affiche.php">Consulter les animations</a>
                  </li >
                  <li class="nav-item">
                  <a class="nav-link" href="affiche_act.php">Consulter les activitées</a>
                  </li>
                   <li class="nav-item">
                  <a class="nav-link" href="inscrire_act.php">Inscrire</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="annulation_act.php">Annulation</a>
                  </li>
                   <form action="deconnexion.php" method="post">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><input type="submit" name="" value="deconnexion" class="input-deco"></a>
                  </li>
                  </form>

              <?php  } else if ($_SESSION['user'] == 'animateur'){?>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cree_activiter.php">Cree activité</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="finale_ajouter.php">Cree animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Animations</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="modif_act.php">Modif Anim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affiche_act.php">Activités</a>
                  </li>
                  <form action="deconnexion.php" method="post">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><input type="submit" name="" value="deconnexion" class="input-deco"></a>
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

<tr><td>Modif de l'animation:</td><td>
    <form action="modif.php" method="POST">
        <select name="codeanim">
        <?php 
        $idc=mysqli_connect("localhost","root","", "gacti");

        $query = "SELECT CODEANIM, NOMANIM FROM animation";
        $result = mysqli_query($idc,$query);
        while ($row = mysqli_fetch_array($result))
        {
            echo "<option value='".$row['CODEANIM']."'>".$row['NOMANIM']."</option>";
        }
        ?>  
       </select>
       <br>
        <div>
            <button type="submit" name="submit" value="Modifier">Modifier</button>
        </div>
    </form>

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