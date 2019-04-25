<?php

use App\Model\CommentManager;
$commentManager = new CommentManager();
$reportedComments = $commentManager->getReportedComments();

$title = "Ajouter un article";


ob_start();
?>

<div class="content">

    <div class="header-title">
        <h1><?= $title ?></h1>

    </div>
    <div class="article">
       






        <div class="article-content">
            <form class="form-add" action="https://projet3.cpdmdev-mg.fr//https://projet3.cpdmdev-mg.fr/?action=admin&amp;adminAction=add" method="post">

                <input class="input-title" name="title" type="text" placeholder="Votre titre">

                <textarea name="content" cols="20" placeholder="Entrez votre article"></textarea> 

                <div>
                    <button class="btn btn-primary submit" style="width: 100%;
                            margin: 15px 0 !important;" type="submit">Ajouter l'article</button>
                </div>
            </form>
        </div>
    </div>







    <?php
    $content = ob_get_clean();

    require 'template.php';
    