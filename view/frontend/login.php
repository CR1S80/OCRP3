<?php

ob_start();

?>

<div class="container" style="margin-top: 50px">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card p-3">
        <h5 class="text-center">Veuillez vous connecter</h5>
        <form action="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=checklogin" method="post">
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



