<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>
<head>
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<div class="content">
    <a class="btn btn-primary back row" href="http://localhost/CoursPHP/TPBlog/OCRP3/" data-original-title="" title=""><i class="far fa-arrow-alt-circle-left"></i> Retour à la liste des chapitres</a>
    <div class="header-title">
        <h1><?= $title; ?></h1>
        <em>le <?= $post->getCreation_date(); ?></em>
    </div>
    <div class="article">






        <div class="article-content">
            <?= $post->getContent(); ?>
        </div>
    </div>
    <div class="header-title">
        <h1 id="comment-ancre">Commentaires</h1>
    </div>

    <form action="index.php?action=addComment&amp;id=<?= $post->getId(); ?>" method="post">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <input type="text" id="comment" name="comment">
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>

    <?php foreach ($comments as $comment): ?>
        <div class="comment-space">
            <div class="comment-author"><?= $comment->getAuthor(); ?> a commenté :</div>
            <hr>
            <p class="comment-text"><?= $comment->getComment(); ?> </p>
            <div class="bottom-comment">
                <div class="comment-date"><?= $comment->getComment_date(); ?></div>
                <div class="comment-action"><a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=reportComment&id=<?= $comment->getId(); ?>">Signaler</a>
                </div>
            </div>

        </div>

<?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>

