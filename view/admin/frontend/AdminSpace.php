<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<link href="public/css/adminSpace.css" rel="stylesheet">
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Derniers Articles</h2></div>
                    <div class="col-sm-4">
                        <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=addPost"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Ajouter un article</button></a>
                    </div>
                </div>
            </div>
            <div class="post-section">
                <table class="table table-action">
                    <thead>
                        <tr>

                            <th class="t-small">Titre</th>
                            <th class="t-medium">Date de parution</th>
                            <th>Extrait</th>
                            <th class="t-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = $posts->fetch()) { ?>
                            <tr>

                                <td><?= $data['title'] ?></td>
                                <td><?= $data['creation_date_fr'] ?></td>
                                <td><?= substr($data['content'], 0, 150) . "..."; ?></td>
                                <td class="t-status t-active">
                                    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=view&id=<?= $data['id']; ?>"><button class="btn btn-success btn-xs" data-title="View" data-toggle="modal" data-target="#view" ><i class="far fa-eye"></i></button></a>
                                    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=edit&id=<?= $data['id']; ?>"><button class="btn btn-warning btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="far fa-edit"></i></button></a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ModalDeletePost"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>

                        </tbody>









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
                                        <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deletePost&id=<?= $data['id']; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    $posts->closeCursor();
                    ?>
                </table>
            </div>
        </div>  
    </div>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2 id="Reported-comment">Commentaires signalés (<?= (count($reportedComments)); ?>) </h2></div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div>

            <div class="comment-section">
                <?php if (count($reportedComments) != 0) { ?>
                    <table class="table table-action">
                        <thead>
                            <tr>

                                <th class="t-small">Auteur</th>
                                <th class="t-medium">Date</th>
                                <th>Commentaire</th>
                                <th class="t-medium">Titre du chapitre</th>
                                <th class="t-small">Signalements</th>
                                <th class="t-medium">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($reportedComments as $comment): ?>
                                <tr>

                                    <td data-label="Auteur"><?= $comment->getAuthor(); ?></td>
                                    <td data-label="Date">le <?= $comment->getComment_date(); ?></td>
                                    <td data-label="Commentaire"><?= $comment->getComment(); ?></td>
                                    <td data-label="Titre du chapitre"><?= $comment->getPost()->getTitle(); ?></td>
                                    <td data-label="Nombre de signalement">Commentaire signalé <?= $comment->getReports(); ?> fois</td>
                                    <td data-label="Actions" class="actionComment">

                                        <a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=validationComment&id=<?= $comment->getId(); ?>"><button class="btn btn-success btn-xs" data-title="Validate" data-toggle="modal" data-target="#edit" ><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteModalComment" ><i class="far fa-trash-alt"></i></button>

                                    </td>
                                </tr>

                            </tbody>

                            <!-- Modal comment -->
                            <div class="modal fade" id="deleteModalComment" tabindex="-1" role="dialog" aria-labelledby="deleteModalComment" aria-hidden="true">
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
                                            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deleteComment&id=<?= $comment->getId(); ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                        </div>
                                    </div>
                                </div>






                                <?php
                            endforeach;
                        } else {
                            ?>
                            <table class="table table-action">
                                <thead>
                                    <tr>
                                        <th class="t-medium">Il n'y a aucun commentaire a modérer</th>
                                    </tr>
                                </thead>
                            <?php } ?>
                    </div>


                </table>
            </div>
        </div>

    </div>  




    <?php $content = ob_get_clean();
    ?>


