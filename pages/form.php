<?php
// Vérifie si le formulaire a été soumis en utilisant la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs des champs du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Vérifie si le nom, l'email et le message ont été fournis
    if (empty($name) || empty($email) || empty($message)) {
        // Affiche un message d'erreur si l'un des champs est vide
        echo "Veuillez remplir tous les champs du formulaire.";
    } else {
        // Vérifie le format de l'email en utilisant une expression régulière
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/@.*\./", $email)) {
            // Affiche un message d'erreur si l'email n'est pas valide
            echo "Format d'e-mail invalide. Veuillez entrer une adresse e-mail valide.";
    }
}}
?>
<h2>Contactez-nous</h2>
<!-- Formulaire HTML avec des champs pour le nom, l'email et le message -->
<form action="contact_form.php" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <!-- Champ de saisie pour le nom avec un attribut "required" pour le rendre obligatoire -->
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Votre Nom" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
        <!-- Champ de saisie pour l'email avec un attribut "required" pour le rendre obligatoire -->
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre Email" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <!-- Zone de texte pour le message avec un attribut "required" pour le rendre obligatoire -->
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Votre message" name="message" required></textarea>
    </div>
    <!-- Bouton de soumission du formulaire -->
    <button type="submit" class="btn btn-light">Envoyer</button>
</form>