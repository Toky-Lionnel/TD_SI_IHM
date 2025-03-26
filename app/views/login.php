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
        <h2> Formulaire d'inscription </h2>
    
        <!-- Message de succès ou d'erreur -->
        <div class="message-container" id="message-container"></div>
    
        <form action="" method="post">
            <label for="nom"> Nom , Prénoms </label>
            <input type="text" name="nom" id="nom" placeholder="Ex. Toky Lionnel" required>
    
            <div class="password-container">
                <label for="password">Mot de passe</label>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" required>
                    <span class="toggle-password" onclick="togglePassword('password', this)">Afficher</span>
                </div>
            </div>
    
            <div class="password-container">
                <label for="confirm_password">Confirmer le mot de passe</label>
                <div class="password-wrapper">
                    <input type="password" name="confirm_password" id="confirm_password" required>
                    <span class="toggle-password" onclick="togglePassword('confirm_password', this)">Afficher</span>
                </div>
                <p id="error-message" class="error-message"></p>
            </div>
    
            <button type="submit" id="submit-button"> S'inscrire </button>
            <button type="submit" id="submit-button"> Se connecter </button>
        </form>
    </div>
    
    
<script src="<?= constant('BASE_URL')?>public/assets/js/login.js"></script>

