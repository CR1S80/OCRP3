<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>




<?php

while ($data = $posts->fetch())

{
?>
    <div class="news">
        <h3>
            <?= $data['title'] ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= substr($data['content'], 0, 450). "..."; ?>
            <a href="index.php?action=admin&adminAction=view&amp;id=<?= $data['id'] ?>">Voir la suite</a>
            <br />
            <em><a href="index.php?action=admin&amp;adminAction=view&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php  $content = ob_get_clean(); 
?>


