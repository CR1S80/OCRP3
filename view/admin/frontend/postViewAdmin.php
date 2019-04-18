<!DOCTYPE html>
<HEAD>
    <script src="public/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea',
            language: 'fr_FR'});</script>
    
    <LINK href="public/css/style.css" rel="stylesheet">
</HEAD>
<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>
<h1><?= $title; ?></h1>
<p><a href="index.php?action=admin&amp;adminAction=home">Retour à la liste des billets</a></p>

<div class="news">
    <form action="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=editPost&id=<?= $post->getId() ?>" method="post">
        <h3>
           
            <em>le <?= $post->getCreation_date(); ?></em>
        </h3>




        <p>
            <?= $post->getContent(); ?>
        </P>
        
    



</div>

<h2>Commentaires</h2>



<?php foreach ($comments as $comment): ?>

    <p><strong><?= $comment->getAuthor(); ?></strong> le <?= $comment->getComment_date(); ?></p>
    <p><?= $comment->getComment(); ?> </br>
        <a class="deleteCom" href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deleteComment&id=<?= $comment->getId(); ?>">Supprimer</a>
    </p> 
    

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>















