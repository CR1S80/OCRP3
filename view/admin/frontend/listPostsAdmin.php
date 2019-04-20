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

<?php  $content = ob_get_clean(); 
?>


