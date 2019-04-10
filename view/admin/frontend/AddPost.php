<?php

ob_start();

?>
<form action="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&amp;adminAction=add" method="post">
    <input name="title" type="text">
    <input name="content" type="text">
    <button>Valider</button>
</form>

<?php

$content = ob_get_clean();

require 'template.php';
