<!DOCTYPE html>

<?php $title = $post->getTitle(); 

ob_start(); ?>

<div class="content">
    <a class="btn btn-primary back row" href="http://localhost/CoursPHP/TPBlog/OCRP3/" data-original-title="" title=""><i class="far fa-arrow-alt-circle-left"></i> Retour à la liste des chapitres</a>
    <div class="header-title">
        <h1><?= $title; ?></h1>
        <em>le <?= $post->getCreation_date(); ?></em>
    </div>
    <div class="article">






        <div class="article-content">
            <?= $post->getContent(); ?>
            <div>
                    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=edit&id=<?= $post->getId(); ?>"><button class="btn btn-warning edit" data-title="Edit" data-toggle="modal" data-target="#edit" >Éditer cet article</button></a>
                    <button type="button" class="btn btn-danger deletePost" data-toggle="modal" data-target="#ModalDeletePost">Supprimer cet article</button>
                </div>
        </div>
        
        
        <!-- Modal post -->
                        <div class="modal fade" id="ModalDeletePost" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="delete">Voulez vous vraiment supprimer cet article ? </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <span style="color: red;" >Si vous le supprimer, il sera effacer définitivement</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deletePost&id=<?= $post->getId(); ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
        
    </div>
    <div class="header-title">
        <h1 id="comment-ancre">Commentaires</h1>
    </div>
    
    <?php 
    if (count($comments) === 0) { ?>
    
    <div class="comment-space" id="Reported-comment">
        <p>Il n'y a pas de commentaire pour le moment</p>
    </div> 
    <?php
    }

    foreach ($comments as $comment): ?>
    <div class="comment-space" id="Reported-comment">
        <div class="comment-author" id="comment-<?= $comment->getId(); ?>"><?= $comment->getAuthor(); ?> a commenté :</div>
            <hr>
            <p class="comment-text"><?= $comment->getComment(); ?> </p>
            <div class="bottom-comment">
                <div class="comment-date"><?= $comment->getComment_date(); ?></div>
                <div class="comment-delete"><a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deleteComment&id=<?= $comment->getId(); ?>">Supprimer</a>
                </div>
            </div>

        </div>

    <?php endforeach; ?>
</div>





<?php $content = ob_get_clean(); ?>















