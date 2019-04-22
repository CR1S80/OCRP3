<?php
$title = $post->getTitle();

ob_start();
?>

<div class="content">
    <a class="btn btn-primary back row" href="http://localhost/CoursPHP/TPBlog/OCRP3/" data-original-title="" title=""><i class="far fa-arrow-alt-circle-left"></i> Retour à la liste des chapitres</a>



    <div class="article">






        <div class="article-content">
            <form action="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=editPost&id=<?= $post->getId() ?>" method="post">
                <h1>

                    <input class="input-title" name="title" type="text" value="<?= $post->getTitle(); ?>">

                </h1>

                <textarea name="content" rows="75" cols="90">
                    <?= $post->getContent(); ?>
                </textarea>

                <div>
                    <button class="btn btn-primary edit" type="submit">Valider la modification</button>
                    <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#ModalDeletePost">Supprimer cet article</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal delete --> 

    <div class="modal fade" id="deleteModalComment" tabindex="-1" role="dialog" aria-labelledby="ModalDeletePost" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete">Voulez vous vraiment supprimer ce commentaire ? </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="color: red;" >Si vous le supprimer, il sera effacer définitivement</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deletePost&id=<?= $data['id']; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                </div>
            </div>
        </div>



    </div>
</div>







</div>












<?php $content = ob_get_clean(); ?>















