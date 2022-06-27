<!DOCTYPE html>
<html>
    <head>
        <title>Site vitrine</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="public/css/styles.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <header class="rouge pr-5 pb-3 pt-3 pl-5 row align-items-center">
            <h1 class="col-3">Resto'</h1>
            <nav class="col-9">
                <ul class="row">
                    <li class="ml-3 mr-3">
                        <a>Accueil</a>
                    </li>
                    <li class="ml-3 mr-3">
                        <a>Notre carte</a>
                    </li>
                    <li class="ml-3 mr-3">
                        <a>Contact</a>
                    </li>
                    <li class="ml-3 mr-3">
                        <a href="?page=admin">Administration</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <div class="container p-3">
                    <h2>Connexion</h2>
                    <br>
                    <br>

                    <form method="POST">
                        <input type="text" name="login" placeholder="Login" class="form-control mb-3">
                        <input type="password" name="mdp" placeholder="Mot de passe" class="form-control mb-3">
                        <input type="submit" name="connexion" value="Connexion" class="btn btn-primary">
                    </form>

                </div>
            </section>
        </main>

        <footer class="rouge pr-5 pb-3 pt-3 pl-5">
            <div class="row justify-content-between">
                <h1 class="col-3">O'Resto</h1>
                <div class="col-4">
                    <h3>Liens utiles</h3>
                    <ul>
                        <li>
                            <a>Nous contacter</a>
                        </li>
                        <li>
                            <a>En savoir +</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <h3>Réseaux sociaux</h3>
                    <ul>
                        <li>
                            <a>Facebook</a>
                        </li>
                        <li>
                            <a>Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>