<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>


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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date de parution</th>
                        <th>Extrait</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $posts->fetch()) { ?>
                        <tr>
                            <td><?= $data['title'] ?></td>
                            <td><?= $data['creation_date_fr'] ?></td>
                            <td><?= substr($data['content'], 0, 150) . "..."; ?></td> 
                            <td class="action">

                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=view&id=<?= $data['id']; ?>"><button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view" ><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=edit&id=<?= $data['id']; ?>"><button class="btn btn-warning btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash-o" aria-hidden="true"></i></button>                                </td>
                        </tr>

                    </tbody>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
                    </body>
                    </html>
                    <?php
                }
                $posts->closeCursor();
                ?>
            </table>
        </div>
    </div>   
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Commentaires signalés </h2></div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div>
            <?php if (count($reportedComments) != 0) { ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Auteur</th>
                            <th>Date</th>
                            <th>Commentaire</th>
                            <th>Titre du chapitre</th>
                            <th>Nombre de signalement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($reportedComments as $comment): ?>
                            <tr>
                                <td><?= $comment->getAuthor(); ?></td>
                                <td><?= $comment->getComment_date(); ?></td>
                                <td><?= $comment->getComment(); ?></td>
                                <td><?= $comment->getPost()->getTitle(); ?></td>
                                <td><?= $comment->getReports(); ?></td>
                                <td class="actionComment">

                                    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=validationComment&id=<?= $comment->getId(); ?>"><button class="btn btn-success btn-xs" data-title="Validate" data-toggle="modal" data-target="#edit" ><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                    <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deleteComment&id=<?= $comment->getId(); ?>"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>

                                </td>
                            </tr>      
                        </tbody>

                    <?php
                    endforeach;
                }
                else {
                    ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="center">Il n'y a aucun commentaire a modérer</th>
                            </tr>
                        </thead>
<?php } ?>


                </table>
        </div>
    </div>  




    <?php $content = ob_get_clean();
    ?>


