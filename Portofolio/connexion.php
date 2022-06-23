<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head> 
    <body>

        <?php
        $utilisateurs = [
            0 => [
                "login" => "Adel",
                "mdp" => 1234,
                "prenom" => "Adel",
                "nom" => "Amara"
            ]
        ];
        ?>

        <header class="p-3 bg-purple">
            <h1>Portfolio - exo 5</h1>
        </header>

        <main>

            <section class="p-3 container">
                <form method="POST">
                    <h2>Connexion</h2>
                    <input type="login" name="login" placeholder="Login" class="mb-3 form-control">
                    <input type="password" name="mdp" placeholder="Mot de passe" class="mb-3 form-control">
                    <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary">
                </form>

                <?php
                // Si le formulaire de connexion est soumis
                if(isset($_POST['connexion'])) {

                    // On parcours les utilisateurs
                    foreach($utilisateurs as $utilisateur) {

                        // Si le login et mdp correspondent à un utilisateur existant
                        if($utilisateur['login'] == $_POST['login'] &&
                           $utilisateur['mdp'] == $_POST['mdp']) {

                            // On créé le cookie login
                            setcookie('login', $utilisateur['login']);

                            // On redirige vers "index.php"
                            header('Location: index.php');
                        }
                    }
                }
                ?>
            </section>

        </main>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>