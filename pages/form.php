<?php  

?>
<h2>Contactez-nous</h2>
<form action="contact_form.php" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" name="name"class="form-control" id="exampleFormControlInput1" placeholder="Votre Nom "required >
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre Email " required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="
        4" placeholder="Votre message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-light">Envoyer</button>

</form>