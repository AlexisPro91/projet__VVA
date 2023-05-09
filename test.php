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
  <?php
    @include('menu.php');
    ?>


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
        mysql_connect("localhost", "root","") or die(mysql_error());
        mysql_select_db("gacti") or die(mysql_error());

        $query = "SELECT CODEANIM, NOMANIM FROM animation";
        $result = mysql_query($query) or die(mysql_error()."[".$query."]");
        while ($row = mysql_fetch_array($result))
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