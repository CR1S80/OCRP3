<?php

ob_start();
$title = 'Connectez vous'
?>
<link href="public/css/style.css"

<div class="container">
    <div class="row login" style="Width: 100% !important; margin: auto !important; font-family: 'Leto';">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card p-3">
        <h5 class="text-center">Veuillez vous connecter</h5>
        <form action="https://projet3.cpdmdev-mg.fr/?action=checklogin" method="post">
          <div class="form-group">
              <input name="email" type="text" class="form-control" placeholder="Identifiant">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Mot de passe">
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block">Se connecter</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>



<?php

$content = ob_get_clean();

require 'template.php';



