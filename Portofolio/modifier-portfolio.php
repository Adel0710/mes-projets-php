<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <header class="p-3 bg-purple">
            <h1>Portfolio</h1>
        </header>

        <?php
        // Si le cookie login existe
        if(isset($_COOKIE['login'])) {
        ?>

        <main>

            <?php
            // On parcours tous les cookies
            foreach($_COOKIE as $cookie) {

                // On récupère le tableau du portfolio
                $portfolio = json_decode($cookie, true);

                if($portfolio['prenom'] == $_GET['prenom']) {
                ?>

                    <section class="container p-3 mt-3 mb-3 bg-white">
                        <!-- Formulaire de création de portfolio -->
                        <form method="POST">
                            <h2>Modifier un portfolio (<?php echo $portfolio['prenom']; ?>)</h2>

                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="prenom" placeholder="Prénom" class="mb-3 form-control" value="<?php echo $portfolio['prenom']; ?>">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="nom" placeholder="Nom" class="mb-3 form-control" value="<?php echo $portfolio['nom']; ?>">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="age" placeholder="Age" class="mb-3 form-control" value="<?php echo $portfolio['age']; ?>">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="ville" placeholder="Ville" class="mb-3 form-control" value="<?php echo $portfolio['ville']; ?>">
                                </div>
                            </div>
                            <textarea name="description" class="mb-3 form-control"><?php echo $portfolio['description']; ?></textarea>
                            <input type="text" name="experience1" placeholder="Expérience 1" class="mb-3 form-control" value="<?php echo $portfolio['experience1']; ?>">
                            <input type="text" name="experience2" placeholder="Expérience 2" class="mb-3 form-control" value="<?php echo $portfolio['experience2']; ?>">

                            <input type="text" name="competence1" placeholder="Compétence 1" class="mb-3 form-control" value="<?php echo $portfolio['competence1']; ?>">
                            <input type="number" name="niveau_competence1" placeholder="Niveau compétence 1 (en %)" class="mb-3 form-control" value="<?php echo $portfolio['niveau_competence1']; ?>">
                            <input type="text" name="competence2" placeholder="Compétence 2" class="mb-3 form-control" value="<?php echo $portfolio['competence2']; ?>">
                            <input type="number" name="niveau_competence2" placeholder="Niveau compétence 2 (en %)" class="mb-3 form-control" value="<?php echo $portfolio['niveau_competence2']; ?>">
                            <input type="text" name="competence3" placeholder="Compétence 3" class="mb-3 form-control" value="<?php echo $portfolio['competence3']; ?>">
                            <input type="number" name="niveau_competence3" placeholder="Niveau compétence 3 (en %)" class="mb-3 form-control" value="<?php echo $portfolio['niveau_competence3']; ?>">

                            <input type="submit" name="modifier-portfolio" value="Enregistrer" class="btn btn-primary">
                        </form>

                        <?php
                        // Modification du portfolio
                        if(isset($_POST['modifier-portfolio'])) {

                            // On remplace le cookie avec le même prénom
                            setcookie($_POST['prenom'], json_encode($_POST));

                            // On redirige vers la page d'accueil
                            header('Location: index.php');
                        }
                        ?>
                    </section>

                <?php
                }
            }
            ?>

        </main>

        <?php
        }
        else {

            header('Location: connexion.php');
        }
        ?>

    </body>
</html>