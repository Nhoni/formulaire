<?php include 'confirm.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>

    <h2>Merci !</h2>
    <!-- Titre de niveau 2 pour indiquer la réussite de l'envoi du formulaire -->

    <p>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>

    <?php

    // Afficher les données du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérification que la requête est de type POST, indiquant que le formulaire a été soumis

        echo "<p>Nom : " . htmlspecialchars($_POST["name"]) . "</p>";
        // Affichage du nom récupéré depuis le formulaire en utilisant $_POST
        echo "<p>Email : " . htmlspecialchars($_POST["email"]) . "</p>";
        // Affichage de l'e-mail récupéré depuis le formulaire en utilisant $_POST
        echo "<p>Message : " . htmlspecialchars($_POST["message"]) . "</p>";
        // Affichage du message récupéré depuis le formulaire en utilisant $_POST
    }

    ?>

</body>
</html>
