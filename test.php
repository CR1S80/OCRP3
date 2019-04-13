<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
    <body>
        <?php
        foreach($comments as $comment): ?>

    


    
    
        <p>blablabal</p>
        <div class="container-fluid dash">
            <div class="row">
                <div class="col-sm-2">
                    <img src="http://www.internewsgroup.com.br/jundiai/assets/images/01word-100x100-9.png">
                </div>
                <div class="col-sm-7">
                    <h5>Commentaires signalés</h5>
                </div>
                <div class="col-sm-3">
                    <h6><span>Dated:</span><span>15/05/2017</span></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-sm-2">Nom</th><th class="col-sm-2">Date</th><th class="col-sm-3">Commentaires</th><th class="col-sm-1">Is OK</th><th class="col-sm-2">Confirmer ?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row container-fluid">
                                    <td class="col-sm-2"><?= $comment->getAuthor(); ?></td>
                                    <td class="col-sm-2"><?= $comment->getComment_date(); ?></td>
                                    <td class="col-sm-3"><?= $comment->getComment(); ?></td>
                                    <td class="col-sm-1"><input type="checkbox"></td>
                                    <td class="col-sm-2"><textarea></textarea></td> <td class="col-sm-2"><span class="select">
            <input id="radio-1" class="radio-tick" name="radio-group1" value="yes" type="radio">
            <label for="radio-1" class="radio-tick-label"></label>
        
            <input id="radio-2" class="radio-cross" name="radio-group1" value="no" type="radio">
            <label for="radio-2" class="radio-cross-label"></label>
            </span></td>
      </tr>
</tbody>
</table>
      </div>
                </div>
            </div>
        </div>
 <?php endforeach; ?>         
</body>
</html>
