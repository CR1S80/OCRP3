<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
        <script src="public/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea',
                language: 'fr_FR'});</script>
    </head>

    <body>
        <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=adminSpace">Espace Admin</a>
        <p>Vous avez <a href="#"><?= count($reportedComments); ?></a> commentaire(s) signalé(s)
            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=logout">Déconnexion</a>
            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=addPost">Ajouter article</a>
            <?= $content;
        ?>
    </body>
</html>


