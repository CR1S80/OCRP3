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

                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=view&id=<?= $data['id']; ?>"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deletePost&id=<?= $data['id']; ?>"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>

                    </tbody>
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
                        <th>Nombre de signalement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                     <?php foreach($reportedComments as $comment): ?>
                    <tr>
                        <td><?= $comment->getAuthor(); ?></td>
                        <td><?= $comment->getComment_date(); ?></td>
                        <td><?= $comment->getComment(); ?></td>
                        <td><?= $comment->getReports(); ?></td>
                        <td class="actionComment">
                            
                            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=validationComment&id=<?= $comment->getId(); ?>"><button class="btn btn-success btn-xs" data-title="Validate" data-toggle="modal" data-target="#edit" ><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deleteComment&id=<?= $comment->getId(); ?>"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>      
                </tbody>
                
                    <?php endforeach; }
                    else {?>
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
</body>
</html>                            
<?php $content = ob_get_clean();
?>


