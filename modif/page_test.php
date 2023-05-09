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