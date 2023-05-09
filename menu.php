
      <a href="#" class="logo">VVA</a>
      <nav class=""> 



            <ul class="navigation">

              <?php if($_SESSION['typeprofil'] == 'visiteur') {?>

                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="page_test.php">Connexion</a>
                    </li>


             <?php  } else if ($_SESSION['typeprofil'] == 'vacancier'){?>

                  <li class="nav-item">
                    <a class="active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affiche_anim.php">Consulter les animations</a>
                  </li >
                  <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Réservation</a>
                  </li>
                   <li class="nav-item">                      
                        <a href="deconnexion.php" class="nav-link">Deconnexion</a>
                  </li>

              <?php  } else if ($_SESSION['typeprofil'] == 'animateur'){?>

                  <li class="nav-item">
                    <a class="active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cree_activiter.php">Cree activité</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="finale_ajouter.php">Cree animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affiche_anim.php">Animations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="modif_act.php">Modif Anim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Voir les réservations</a>
                  </li>
                  <li class="nav-item">                      
                        <a href="deconnexion.php" class="nav-link">Deconnexion</a>
                  </li>

                  

              <?php }?>


            </ul>
           
         
    </nav>
