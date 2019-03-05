
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
        <?php
        echo $post->getContent(); ?>
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
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p> 
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>





    
