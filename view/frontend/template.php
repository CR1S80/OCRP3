<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 



        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">
    
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