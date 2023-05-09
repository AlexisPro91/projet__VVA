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
        if ($_SESSION['typeprofil'] == "") { $_SESSION['typeprof'] = 'visiteur';}
?>
  </head>
  <body>
    
    <header>
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
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affiche_anim.php">Consulter les animations</a>
                  </li >
                  <li class="nav-item">
                  <a class="active" href="affiche_act.php">Consulter les activitées</a>
                  </li>
                   <li class="nav-item">
                  <a class="nav-link" href=".././Inscrire/inscrire_act.php">Inscrire</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">pas inscrit</a>
                  </li>
                   <form action="../deconnexion.php" method="post">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><input type="submit" name="" value="deconnexion" class="input-deco"></a>
                  </li>
                  </form>

              <?php  } else if ($_SESSION['typeprofil'] == 'animateur'){?>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=".././Ajouter_activite/cree_activiter.php">Cree activité</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=".././Ajouter_anim/finale_ajouter.php">Cree animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affiche_anim.php">Animations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=".././modif/modif_act.php">Modif Anim</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="affiche_act.php">Activités</a>
                  </li>
                  <form action="../deconnexion.php" method="post">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><input type="submit" name="" value="deconnexion" class="input-deco"></a>
                  </li>
                  </form>

              <?php }?>


            </ul>
           
         
    </nav>
    </header>


    <section class="parallax">
     <form action="connexion1.php" method="post">

            <?php
               if(isset($error)){
                  foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                  }
               }
            ?>


            <div class="form-floating mb-3">
              <label for="floatingInput">Identifiant : </label>
              <input type="text"  name="user" class="form-control" placeholder="user">
            </div>

            <div class="form-floating">
              <label for="floatingPassword">Mot de passe : </label>
              <input type="password" name="mdp" class="form-control"  placeholder="Password">
            </div><br>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-secondary" type="submit" name="submit" value="Se connecter">Connexion</button>
            </div>


      <img src="monutain_01.png" id="m1">
      <img src="trees_02.png" id="t2">
      <img src="monutain_02.png" id="m2">
      <img src="trees_01.png" id="t1">
      <img src="man.png" id="man">
      <img src="plants.png" id="plants">
    </section>
    <section class="sec">
      <h2>Bienvenue</h2>
      
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <script>
      gsap.from("#m1",{
        scrollTrigger : {
          scrub: true
        },
        y: 100,
      })
      gsap.from("#m2",{
        scrollTrigger : {
          scrub: true
        },
        y: 50,
      })
      gsap.from("#t2",{
        scrollTrigger : {
          scrub: true
        },
        x: -50,
      })
      gsap.from("#t1",{
        scrollTrigger : {
          scrub: true
        },
        x: 50,
      })
      gsap.from("#man",{
        scrollTrigger : {
          scrub: true
        },
        x: -250,
      })
      gsap.from("#plants",{
        scrollTrigger : {
          scrub: true
        },
        x: -50,
      })
      gsap.from("#text",{
        scrollTrigger : {
          scrub: true
        },
        x: 600,
      })
    </script>
  </body>
</html>