<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="formulaire">
            <h2> Formulaire d'inscription </h2>
        <form action="" method="post">

                <label for="nom"> Nom , Prenoms </label>
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

    

    <script> 
        function togglePassword(inputId, toggleElement) {
            let passwordField = document.getElementById(inputId);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleElement.textContent = "Masquer"; // Change l'icône
            } else {
                passwordField.type = "password";
                toggleElement.textContent = "Afficher"; // Remet l'icône initiale
            }
        }

        let confirmPasswordInput = document.getElementById("confirm_password");
        confirmPasswordInput.addEventListener("blur", validatePassword);

        function validatePassword() {
            let password = document.getElementById("password").value;
            let confirmPasswordInput = document.getElementById("confirm_password");
            let confirmPassword = document.getElementById("confirm_password").value;
            let errorMessage = document.getElementById("error-message");


            if (confirmPassword === "") {
                errorMessage.textContent = "";
                return;
            }

            if (password !== confirmPassword) {
                confirmPasswordInput.style.border = "2px solid red";
                errorMessage.textContent = "Les mots de passe ne correspondent pas.";
                errorMessage.style.color = "red";
            } else {
                confirmPasswordInput.style.border = "";
                errorMessage.textContent = "";
            }
        }





    </script>


<style>

@charset "UTF-8";
body {
  display: flex;
  align-items: center;
  justify-content: center;
}

.formulaire {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 600px;
  height: auto;
  padding: 20px;
  background-color: white;
  gap: 15px;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
  border-radius: 15px;
}
.formulaire form {
  margin-top: 15px;
  margin-bottom: 15px;
}
.formulaire form fieldset {
  margin-bottom: 20px;
}
.formulaire form fieldset legend {
  font-size: 20px;
}
.formulaire form label {
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.formulaire form input, .formulaire form select {
  display: block;
  width: 500px;
  margin-top: 8px;
  padding: 10px;
  height: 27px;
  border-radius: 15px;
  font-size: medium;
}
.formulaire form select {
  height: 37px;
  padding: 8px;
  width: 520px;
}
.formulaire form #checkbox {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 16px;
  cursor: pointer;
}
.formulaire form .custom-checkbox {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  width: 20px;
  height: 20px;
  border: 2px solid #ccc;
  border-radius: 5px;
  position: relative;
  cursor: pointer;
  transition: all 0.3s;
}
.formulaire form .custom-checkbox:checked {
  background-color: #007bff;
  border-color: #007bff;
}
.formulaire form .custom-checkbox:checked::after {
  content: "✔";
  font-size: 16px;
  color: white;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.formulaire form .custom-checkbox:hover {
  border-color: #999999;
}
.formulaire form #submit-button {
  display: block;
  background-color: #007bff;
  color: white;
  border: none;
  margin: 15px auto;
  padding: 12px 24px;
  font-size: 20px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
  display: block;
  margin-top: 15px;
}
.formulaire form #submit-button:hover {
  background-color: #0056b3;
  transform: scale(1.05);
}
.formulaire form #submit-button:active {
  transform: scale(0.95);
}
.formulaire form .password-container {
  margin-bottom: 15px;
}
.formulaire form .password-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}
.formulaire form .toggle-password {
  position: absolute;
  right: 20px;
  margin-top: 8px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  color: gray;
}
.formulaire form .toggle-password .error-message {
  font-size: 14px;
  color: red;
  margin-top: 5px;
  font-weight: bold;
}/*# sourceMappingURL=style.css.map */
</style>

</body>
</html>