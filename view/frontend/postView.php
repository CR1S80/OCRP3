<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>
<h1><?= $title; ?></h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= $post->getTitle(); ?>
        <em>le <?= $post->getCreation_date(); ?></em>
    </h3>
    
    <p>
        <?= $post->getContent(); ?>
    </p>
</div>

<h2>Commentaires</h2>

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

<?php 
 
foreach($comments as $comment): ?>

    <p><strong><?= $comment->getAuthor(); ?></strong> le <?= $comment->getComment_date(); ?></p>
    <p><?= $comment->getComment(); ?></p> 
    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=reportComment&id=<?= $comment->getId(); ?>">Signaler</a>

<?php endforeach; ?>


<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>

