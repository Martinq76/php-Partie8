<?php
setcookie('pseudo', $_POST['login'], time() + 365 * 24 * 3600, null, null, false, true);
setcookie('password', $_POST['mdp'], time() + 365 * 24 * 3600, null, null, false, true);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 3</title>
    </head>
    <body id="backgroundBody">
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-4 text-center">
                <h1><b><u>Partie 8 exercice 3</u></b></h1>
                <form method="POST">
                    <div class="form-group">
                        <label for="login">Login : </label>
                        <input type="text" name="login" class="form-control" aria-describedby="emailHelp" placeholder="Pseudo">
          
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe : </label>
                        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyé</button>
                </form>
            </div>
            <div class="col-4">
                
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>