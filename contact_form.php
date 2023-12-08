<?php
// Début du script PHP pour traiter le formulaire

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification que la requête est de type POST, indiquant que le formulaire a été soumis


    // Redirection vers la page de confirmation après le traitement
    header("Location: confirmation.php");
    // La fonction header() est utilisée pour envoyer une en-tête HTTP, dans ce cas, une redirection vers "confirmation.php"
    
    exit();
    // La fonction exit() est utilisée pour terminer le script PHP immédiatement après la redirection, empêchant l'exécution ultérieure du code
}

?>

<!-- Balise HTML pour afficher le formulaire de contact -->
<?php include 'pages/form.php'; ?>
<!-- Inclusion d'un fichier externe 'form.php' qui contient le code HTML du formulaire -->
