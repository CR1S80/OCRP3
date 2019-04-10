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
use App\Model\PostEntity;


/**
 * Description of AdminController
 *
 * @author crisd
 */
class AdminController {
    
    public function home () {
        $postManager = new PostManager();
        $posts = $postManager->getLastFivePosts();
        $post = new PostEntity();
        
        require 'view/admin/frontend/listPostsAdmin.php';
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        
        
        
        require 'view/admin/frontend/template.php';
    }
    
    public function editPost () {
        $postManager = new PostManager();
        
        $post = $postManager->getSinglePost($_GET['id']);
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        $commentManager = new CommentManager();
        $comments = $commentManager->getCommentsFromSinglePost($_GET['id']);
        
        require 'view/admin/frontend/postViewAdmin.php';
        
        require 'view/admin/frontend/template.php';
    }
    
    public function addPost($title, $content) {
        
        $post = new PostEntity();
        $post->setTitle($title)
                 ->setContent($content);
        $postManager = new PostManager;
        $postManager->addPost($post);
        
        header('Location: http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=home');
        
    }
    
    
        
    
    
    public function deletePost($id) {
       $post = new PostEntity();
       $post->setId($id);
       
       $postManager = new PostManager();
       $postManager->deletePost($id);
       var_dump($id);
       var_dump($post);
       
       //header('Location: http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=home');
       
       
    }
    
   
}

?>
