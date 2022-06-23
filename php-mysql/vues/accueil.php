<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP Mysql</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="public/css/styles.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <main>
            <section class="container p-3">

                <form method="POST">
                    <h2>Inscription</h2>
                    <input type="text" name="login" placeholder="Login" class="form-control mb-3">
                    <input type="email" name="email" placeholder="Email" class="form-control mb-3">
                    <input type="password" name="mdp" placeholder="Mot de passe" class="form-control mb-3">
                    <input type="submit" name="inscription" value="S'inscrire" class="btn btn-primary">
                </form>

            </section>

            <section class="container p-3">
                <ul class="row">
                    <?php
                    foreach($utilisateurs as $utilisateur) {

                        echo "<li class='col-4'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3>" . $utilisateur['login'] . "</h3>
                                    <a href='?page=utilisateur&login=" . $utilisateur['login'] . "'>Voir le profil</a>
                                    <br>
                                    
                                    <a href='?page=modifier-utilisateur&login=" . $utilisateur['login'] . "' class='btn btn-primary'>Modifier</a>

                                    <form method='POST'>
                                        <input type='hidden' name='id' value='" . $utilisateur['id'] . "'>
                                        <input type='submit' name='supprimer-utilisateur' value='Supprimer' class='btn btn-danger'>
                                    </form>
                                </div>
                            </div>
                        </li>";
                    }
                    ?>
                </ul>
            </section>
        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>