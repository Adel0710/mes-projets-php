<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio - exo 5</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <header class="p-3 bg-purple">
            <h1>Portfolio - exo 5</h1>
        </header>

        <main>
            <section class="container p-3 mt-3 mb-3 bg-white">

                <?php
                // On parcours tous les cookies
                foreach($_COOKIE as $cookie) {

                    // On récupère le tableau du portfolio
                    $portfolio = json_decode($cookie, true);

                    if($portfolio['prenom'] == $_GET['prenom']) {

                        echo "<h2>" . $portfolio['prenom'] . " " . $portfolio['nom'] . "</h2>";

                        echo $portfolio['age'] . " ans, " . $portfolio['ville'];
                        ?>

                        <ul class="row">
                            <li class="col-6">
                                <h2>Description</h2>
                                <p>
                                    <?php echo $portfolio['description']; ?>
                                </p>
                            </li>
                            <li class="col-6">
                                <h2>Compétences</h2>
                                <ul>
                                    <li>
                                        <?php
                                        echo $portfolio['competence1'];
                                        ?>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo $portfolio['niveau_competence1']; ?>%" aria-valuenow="<?php echo $portfolio['niveau_competence1']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
                                        echo $portfolio['competence2'];
                                        ?>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo $portfolio['niveau_competence2']; ?>%" aria-valuenow="<?php echo $portfolio['niveau_competence2']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
                                        echo $portfolio['competence3'];
                                        ?>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo $portfolio['niveau_competence3']; ?>%" aria-valuenow="<?php echo $portfolio['niveau_competence3']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <h2>Expériences</h2>
                        <ul>
                            <li class="mb-3 pb-3 border-bottom border-dark">
                                <?php
                                echo $portfolio['experience1'];
                                ?>
                            </li>
                            <li class="mb-3 pb-3 border-bottom border-dark">
                                <?php
                                echo $portfolio['experience2'];
                                ?>
                            </li>
                        </ul>

                        <?php
                    }
                }
                ?>

            </section>
        </main>
    </body>
</html>