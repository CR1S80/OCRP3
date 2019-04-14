<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>


<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
        font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
        width: 700px;
        margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }
    .table-title .add-new i {
        margin-right: 4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }
</style>

</head>
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
                            <td>

                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=view&id=<?= $data['id']; ?>"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deletePost&id=<?= $data['id']; ?>"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
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
                    <div class="col-sm-8"><h2>Commentaires signalés</h2></div>
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
                        <td>
                            
                            <a href="http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=validationComment&id=<?= $comment->getId(); ?>"><button class="btn btn-success btn-xs" data-title="Validate" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></a>
                                <a href="http://localhost/CoursPHP/TPBlog/OCRP3/index.php?action=admin&adminAction=deleteComment&id=<?= $comment->getId(); ?>"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
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


