<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $title ?></title>
        <link href="public/css/navbar-css" rel="stylesheet" /> 
        <link href="public/css/style.css" rel="stylesheet" />
        <script src="public/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea',
                language: 'fr_FR'});</script>
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Custom styles for this template -->

        
    </head>




    <!------ Include the above in your HEAD tag ---------->



    <nav class="navbar navbar-icon-top navbar-expand-xl navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=home">
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=adminSpace">
                            <i class="fa fa-tachometer-alt fa-lg">
                        <?php if (isset($reportedComments) && count($reportedComments) != 0) { ?>
                                <span class="badge badge-danger"><?php echo count($reportedComments); ?></span>
                            <?php } ?>
                        </i>
                        
                                Espace Administrateur
                            
                        
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=addPost">
                        <i class="fa fa-plus-square"></i>
                        Ajouter un article
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=logout">
                        <i class="fa fa-sign-out-alt"></i>

                        </i>
                        Déconnexion
                    </a>
                </li>
            </ul>

        </div>
    </nav>



    <main role="main" class="container">

        <div class="starter-template">

            <p class="lead"><?= $content; ?></p>
        </div>


    </main>

</body><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</html>


