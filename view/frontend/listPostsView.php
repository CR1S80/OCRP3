<?php $title = 'Mon blog'; 
ob_start(); ?>

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

                <a class="link-content" href="https://projet3.cpdmdev-mg.fr/?action=post&amp;id=<?= $data['id'] ?>">    
                <div class="row-content">
                        <h2><?= $data['title'] ?></h2><em>ajouté le <?= $data['creation_date_fr'] ?></em>
                        <p><?= mb_substr($data['content'], 0, 450,'UTF8') . "..."; ?></p>
                        <a class="btn btn-secondary" href="https://projet3.cpdmdev-mg.fr/?action=post&amp;id=<?= $data['id'] ?>" role="button">Voir la suite &raquo;</a>
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
    
    
</body>
</html>
<?php $content = ob_get_clean();

require('template.php'); ?>



















