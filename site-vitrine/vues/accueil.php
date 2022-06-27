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
                        <a href="?page=connexion">Connexion</a>
                    </li>
                    <li class="ml-3 mr-3">
                        <a href="?page=admin">Administration</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="public/images/brick-wall-g09f81187f_1280.jpg" alt="First slide">
                            <div class="filter"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Bienvenue sur notre site de O'Resto</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/buildings-g32365aaca_1280.jpg" alt="Second slide">
                            <div class="filter"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Venez profitez de notre meilleure salle</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/cafe-g70308b009_1280.jpg" alt="Third slide">
                            <div class="filter"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Venez découvrir nos meilleurs plats</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <section>
                <div class="container p-5 text-center">
                    <h2>Bienvenue sur O'Resto</h2>
                    <br>
                    <br>
                    <p>Restaurant traditionnel et grillades</p>
                </div>
            </section>

            <?php
            $i = 1;
            $class = "rouge";
            $classRow = "";
            
            foreach($carte as $elementCarte) {

                if($i == 2) {

                    $class = "noir";
                    $classRow = "row-reverse";
                }
                else {
                    $class = "rouge";
                    $classRow = "";
                }
                ?>

                <section class="<?php echo $class; ?>">
                    <div class="container p-5 text-center">
                        <div class="row align-items-center <?php echo $classRow; ?>">
                            <div class="col-6">
                                <img src="public/images/<?php echo $elementCarte['image']; ?>">
                            </div>
                            <div class="col-6">
                                <article>
                                    <h2><?php echo $elementCarte['titre']; ?></h2>
                                    <br>
                                    <br>
                                    <p><?php echo $elementCarte['description']; ?></p>

                                    <a class="btn" href="<?php echo $elementCarte['lien']; ?>">Voir <?php echo $elementCarte['titre']; ?></a>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            <?php

                $i++;
            }
            ?>
            <section class="noir">
                <div class="container p-5">
                    <form method="POST">
                        <h2 class="text-center">Réserver</h2>
                        <br>
                        <br>
                        <input type="email" class="mb-3 form-control" placeholder="Votre email">
                        <input type="prenom" class="mb-3 form-control" placeholder="Votre prénom">
                        <input type="number" class="mb-3 form-control" placeholder="Nb. de personnes">
                        <textarea class="mb-3 form-control">message ...</textarea>
                        <div class="text-center">
                            <input type="submit" name="reservation" value="Réserver" class="btn">
                        </div>
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
