<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
        <script src="public/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea',
                language: 'fr_FR'});</script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">


        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
    </head>


    <body>

        <p>Vous avez <a href="#"><?= count($reportedComments); ?></a> commentaire(s) signalé(s)


    </body>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=adminSpace">Espace Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=addPost">Ajouter article</a>
                    </li>

            </div>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
            </form>

        </nav>

        <main role="main" class="container">

            <div class="starter-template">

                <p class="lead"><?= $content; ?></p>
            </div>

        </main><!-- /.container -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>


