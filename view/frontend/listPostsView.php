<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<link href="public/css/style.css" rel="stylesheet">
<body>



    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">    
                <?php
                while ($data = $posts->fetch()) {
                    ?>  

                <a class="link-content" href="index.php?action=post&amp;id=<?= $data['id'] ?>">    
                <div class="row-content">
                        <h2><?= $data['title'] ?></h2><em>ajouté le <?= $data['creation_date_fr'] ?></em>
                        <p><?= substr($data['content'], 0, 450) . "..."; ?></p>
                        <p><a class="btn btn-secondary" href="index.php?action=post&amp;id=<?= $data['id'] ?>" role="button">Voir la suite &raquo;</a></p>
                    </div>
                </a>
                





                <?php
            }
            $posts->closeCursor();
            ?>     <hr>
</div>
        </div> <!-- /container -->

    </main>
    <footer class="container">
        <p>&copy; Projet OCR </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>



















