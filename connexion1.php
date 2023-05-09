<?php 

   $conn=mysqli_connect("localhost","root","", "gacti");


   $user = $_POST['user'];
   $mdp = $_POST['mdp'];

   $select = " SELECT TYPEPROFIL, DATEDEBSEJOUR, DATEFINSEJOUR FROM compte WHERE USER= '$user' && MDP= '$mdp' ";
   $result = mysqli_query($conn, $select);
   $recup= mysqli_fetch_array($result);

   if(mysqli_num_rows($result) == 0){

      header('Location:connexion.php');
   }
   else{
      if(($recup['TYPEPROFIL']) == 'va'){
         session_start();
         $_SESSION['typeprofil'] = 'vacancier';
         $_SESSION['datdebsejour']= $recup['DATEDEBSEJOUR'];
         $_SESSION['datefinsejour']= $recup['DATEFINSEJOUR'];
         $_SESSION['nomuser']= $user;
         header('Location:index.php');
      }

      else if(($recup['TYPEPROFIL']) == 'an'){
         session_start();
         $_SESSION['typeprofil'] = 'animateur';
         $_SESSION['nomuser']= $user;
         header('Location:index.php');
      } 
   }
?>