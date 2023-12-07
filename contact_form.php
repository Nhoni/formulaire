<?php
// Script PHP pour traiter le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Redirection vers la page de confirmation
    header("Location: confirmation.php");
    exit();
}
?>
<!-- Formulaire de contact -->
<?php include 'pages/contact_form-html.php'; ?>
