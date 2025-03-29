<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= constant('BASE_URL')?>public/assets/css/login.css">
</head>

<body>


    <div class="formulaire">
        <h2> Formulaire de <?= $contexte ?> </h2>

        <?php if (isset($_SESSION['type']) && isset($_SESSION['message'])) { ?>
            <div class="message-container <?= $_SESSION['type']?>" id="message-container">
                <?= $_SESSION['message'] ?>
            </div>
        <?php unset($_SESSION['type'], $_SESSION['message']); } ?>


        <form action="<?= $url ?>" method="post">
            <label for="nom"> Nom, Prénoms </label>
            <input type="text" name="nom" id="nom" placeholder="Ex. Toky Lionnel" required>

            <div class="password-container">
                <label for="password">Mot de passe</label>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" required>
                    <span class="toggle-password" onclick="togglePassword('password', this)">Afficher</span>
                </div>
            </div>

            <?php if ($contexte === 'Inscription') { ?>
            <div class="password-container">
                <label for="confirm_password">Confirmer le mot de passe</label>
                <div class="password-wrapper">
                    <input type="password" name="confirm_password" id="confirm_password" required>
                    <span class="toggle-password" onclick="togglePassword('confirm_password', this)">Afficher</span>
                </div>
                <p id="error-message" class="error-message"></p>
            </div>
            <?php } ?>

            <div class="button-container">
                <button type="submit" id="submit-button">
                    <?= ($contexte === 'Inscription') ? "S'inscrire" : "Se connecter" ?>
                </button>

                <?php if ($contexte === 'Connexion') { ?>
                <a href="<?=constant('BASE_URL')?>inscription" class="switch-link">Créer un compte</a>
                <?php } else { ?>
                <a href="<?=constant('BASE_URL')?>connexion" class="switch-link">Déjà inscrit ? Se connecter</a>
                <?php } ?>
            </div>
        </form>
    </div>
 
    
<script src="<?= constant('BASE_URL')?>public/assets/js/login.js"></script>

</body>

</html>
