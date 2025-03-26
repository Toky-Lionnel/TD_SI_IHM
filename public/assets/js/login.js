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


function showMessage(type, text) {
let messageContainer = document.getElementById("message-container");

if (type === "success") {
messageContainer.className = "message-container message-success";
} else if (type === "error") {
messageContainer.className = "message-container message-error";
}

messageContainer.textContent = text;
messageContainer.style.display = "block";

setTimeout(() => {
messageContainer.style.display = "none";
}, 3000);
}

// Exemple d'utilisation
// //showMessage("success", "Inscription réussie!");
// showMessage("error", "Erreur: Veuillez vérifier vos informations.");



