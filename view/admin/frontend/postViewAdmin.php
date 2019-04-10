<!DOCTYPE html>
<HEAD>
    <script src="public/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea',
            language: 'fr_FR'});</script>
</HEAD>
<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>
<h1><?= $title; ?></h1>
<p><a href="index.php?action=admin&amp;adminAction=home">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= $post->getTitle(); ?>
        <em>le <?= $post->getCreation_date(); ?></em>
    </h3>


    <p>
    
        <textarea rows="75" cols="90">
            <?= $post->getContent(); ?>
        </textarea>
        <BUTTON name="edit">Valider la modification</BUTTON>
        <a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=deletePost&id=<?=$post->getId()?>"><BUTTON name="delete">Supprimer cet article</BUTTON></A>
    
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

<?php foreach ($comments as $comment): ?>

    <p><strong><?= $comment->getAuthor(); ?></strong> le <?= $comment->getComment_date(); ?></p>
    <p><?= $comment->getComment(); ?></p> 

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>















