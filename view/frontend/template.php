<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        if (isset($_SESSION['admin']['email'])) {
            ?>
            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=adminSpace">Espace Admin</a>

            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=logout">Déconnexion</a>
            <?php
        } else {
            echo '<a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=login">Connexion</a>';
        }
        ?>


<?= $content ?>
    </body>
</html>