<?php ob_start() ?>
<div class="container-fluid text-center logbox" >
    <form method="post" class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
      <label for="inputEmail" class="sr-only">Identifiant</label>
      <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Identifiant" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required="">
       <label for="inputPassword" class="sr-only">Confirmer mot de passe</label>
      <input type="password" name="passwordconfirm" id="inputPassword" class="form-control" placeholder="Confirmer mot de passe" required="">
      <input type="submit" name="submit" value="S'inscrire" class="btn btn-lg btn-primary btn-block"/>
      <p class="mt-5 mb-3 text-muted">© 2018-2020</p>
    </form>
</div>
<?php
$title = 'S\'inscrire';
$content = ob_get_clean();
include 'includes/layout.php';
?>