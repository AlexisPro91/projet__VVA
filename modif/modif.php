<?php
    $idc=mysqli_connect("localhost","root","", "gacti");
    $codeanim=$_GET['codeanim'];
    $requete="SELECT * from animation where CODEANIM='$codeanim'";
    $resultat= mysqli_query($idc,$requete);
    $ligne=mysqli_fetch_array($resultat);
        echo '<center><h2> Modification des informations </h2></center></br>';
        echo '<div class="row">
                <div class="col-2">
                </div>
                  <div class="col-7">
                    <form action="up.php" method="POST">';
                echo '<div class="form mb-3">
                <input class="form-control" type="text" name="codeanim" value="'.$ligne["CODEANIM"].'" readonly>
                </div>';
                echo '<div class="form mb-3">
                <input type="text" class="form-control" name="NOMANIM" value="'.$ligne["NOMANIM"].'""></div>';
                echo '<div class="form mb-3"><input type="date" class="form-control" name="DATEVALIDITEANIM" value="'.$ligne["DATEVALIDITEANIM"].'"></div>';
                echo '<div class="form mb-3">
                <input type="text" name="DUREEANIM" class="form-control" value="'.$ligne["DUREEANIM"].'"></div>';
                echo '<div class="form mb-3">
                <input type="text" name="LIMITEAGE" class="form-control" value="'.$ligne["LIMITEAGE"].'""></p>';
                echo '<div class="form mb-3">
                <input type="text" name="TARIFANIM" class="form-control" value="'.$ligne["TARIFANIM"].'"></div>';
                echo '<div class="form mb-3">
                <input type="text" name="DESCRIPTANIM" class="form-control" value="'.$ligne["DESCRIPTANIM"].'""></div>';
                echo '<div class="form mb-3">
                <input type="text" name="COMMENTANIM" class="form-control" value="'.$ligne["COMMENTANIM"].'""></div>';
                echo '<div class="form mb-3">
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