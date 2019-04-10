<?php

ob_start();

?>
<form action="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=checklogin" method="post">
    <input name="email" type="email">
    <input name="password" type="password">
    <button>Valider</button>
</form>

<?php

$content = ob_get_clean();

require 'template.php';



