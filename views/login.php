<?php ob_start() ?>
<div class="container-fluid text-center logbox" >
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
      <label for="inputEmail" class="sr-only">Identifiant</label>
      <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Identifiant" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required="">
      <input type="submit" name="submit" value="Se connecter" class="btn btn-lg btn-primary btn-block"/>
      <p class="mt-5 mb-3 text-muted">© 2018-2020</p>
    </form>
</div>
<?php
$title = 'S\'identifier';
$content = ob_get_clean();
include 'includes/layout.php'
?>