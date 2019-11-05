<?php ob_start(); ?>

<div  class="container">
  <div id="login" class="row">
    <form class="col-lg-8"action="index.php?action=login" method="post">
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>
</div>


<?php $content = ob_get_clean(); ?>


<?php require 'view/frontend/template.php' ?>
