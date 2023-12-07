<?php include 'confirm.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h2>Merci !</h2>
    <p>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>

    <?php
    // Afficher les données du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Nom : " . htmlspecialchars($_POST["name"]) . "</p>";
        echo "<p>Email : " . htmlspecialchars($_POST["email"]) . "</p>";
        echo "<p>Message : " . htmlspecialchars($_POST["message"]) . "</p>";
    }
    ?>

</body>
</html>
