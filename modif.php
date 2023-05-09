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
        <div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-10">
        <h2>Modification de l'animation : </h2><br><br>
    <?php
    $idc=mysqli_connect("localhost","root","", "gacti");
    $codeanim=$_POST['codeanim'];
    $requete="SELECT * from animation where CODEANIM='$codeanim'";
    $resultat= mysqli_query($idc,$requete);
    $ligne=mysqli_fetch_array($resultat);

        echo '<form action="up.php" method="POST">';
                echo '<div class="form mb-3">
                CODE ANIM : 
                <input class="form-control" type="text" name="codeanim" value="'.$ligne["CODEANIM"].'" readonly>
                </div>';
                echo '<div class="form mb-3">
                NOM ANIM:
                <input type="text" class="form-control" name="NOMANIM" value="'.$ligne["NOMANIM"].'""></div>';
                echo '<div class="form mb-3">
                DATE VALIDITE :
                <input type="date" class="form-control" name="DATEVALIDITEANIM" value="'.$ligne["DATEVALIDITEANIM"].'"></div>';
                echo '<div class="form mb-3">
                DUREE:
                <input type="text" name="DUREEANIM" class="form-control" value="'.$ligne["DUREEANIM"].'"></div>';
                echo '<div class="form mb-3">
                LIMITE AGE :
                <input type="text" name="LIMITEAGE" class="form-control" value="'.$ligne["LIMITEAGE"].'""></p>';
                echo '<div class="form mb-3">
                TARIF :
                <input type="text" name="TARIFANIM" class="form-control" value="'.$ligne["TARIFANIM"].'"></div>';
                echo '<div class="form mb-3">
                DESCRIPTION :
                <input type="text" name="DESCRIPTANIM" class="form-control" value="'.$ligne["DESCRIPTANIM"].'""></div>';
                echo '<div class="form mb-3">
                COMMENTAIRE :
                <input type="text" name="COMMENTANIM" class="form-control" value="'.$ligne["COMMENTANIM"].'""></div>';
                echo '<div class="form mb-3">
                DIFFICULTE : 
                <input type="text" name="DIFFICULTEANIM" class="form-control" value="'.$ligne["DIFFICULTEANIM"].'""></div>';
                echo '<div class="form mb-3">
                <button class="btn btn-secondary" type="submit" name="submit" value="Modifier">Modifier</button>
                <button class="btn btn-secondary" type="reset" value="Annuler">Annuler</button>
            </div>';
            echo "</form>
            </div>
            </div>";
         mysqli_close($idc);
?>
    
     
      <img src="./Image/monutain_02.png" id="m2">
      <img src="./Image/trees_01.png" id="t1">

      <img src="./Image/plants.png" id="plants">
    </section>

    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
    
  </body>
</html>