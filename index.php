<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
    <meta charset="utf-8">
      <?php
        $idc=mysqli_connect("localhost","root","", "gacti");
        error_reporting(0);
        session_start();
        if ($_SESSION['typeprofil'] == "") { $_SESSION['typeprofil'] = 'visiteur';}
?>
  </head>
    <body>
    <?php
    @include('menu.php');
    ?>


    <section class="parallax">
      <h2 id="text">Bienvenue</h2>
      <img src="./Image/monutain_01.png" id="m1">
      <img src="./Image/trees_02.png" id="t2">
      <img src="./Image/monutain_02.png" id="m2">
      <img src="./Image/trees_01.png" id="t1">
      <img src="./Image/man.png" id="man">
      <img src="./Image/plants.png" id="plants">
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