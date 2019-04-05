<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Model\PostManager;
use App\Model\CommentManager;
use App\Model\CommentEntity;


/**
 * Description of AdminController
 *
 * @author crisd
 */
class AdminController {
    
    public function home () {
        $postManager = new PostManager();
        $posts = $postManager->getLastFivePosts();
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        var_dump($posts);
        var_dump($reportedComments);
        
        include 'view/admin/template.php';
    }
    
    public function editPost () {
        $postManager = new PostManager();
        $delPost = $postManager->delPost();
        
        
    }
    
   
}

?>
