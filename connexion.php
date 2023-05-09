<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>


<form action="connexion1.php" method="post">

            <?php
               if(isset($error)){
                  foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                  }
               }
            ?>


            <div class="form-floating mb-3">
              <input type="text"  name="user" class="form-control" placeholder="user">
              <label for="floatingInput">User</label>
            </div>

            <div class="form-floating">
              <input type="password" name="mdp" class="form-control"  placeholder="Password">
              <label for="floatingPassword">Mot de passe</label>
            </div><br>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-secondary" type="submit" name="submit" value="Se connecter">Connexion</button>
            </div>


         </form>
         </body>
</html>