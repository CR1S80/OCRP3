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
    
    public function adminSpace () {
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        $postManager = new PostManager();
        $posts = $postManager->getAllPosts();
        
        require 'view/admin/frontend/AdminSpace.php';
        
        require 'view/admin/frontend/template.php';
        
        
    }
    
    
    public function home () {
        $postManager = new PostManager();
        $posts = $postManager->getAllPosts();
        $post = new PostEntity();
        
        require 'view/admin/frontend/listPostsAdmin.php';
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        
        
        
        require 'view/admin/frontend/template.php';
    }
    
    public function viewPost () {
        $postManager = new PostManager();
        
        $post = $postManager->getSinglePost($_GET['id']);
        
          if ($post->getId() === NULL) {
            require 'view/frontend/404.php';;
        } else {
            
             
        $commentManager = new CommentManager();
        $comments = $commentManager->getCommentsFromSinglePost($_GET['id']);
        $reportedComments = $commentManager->getReportedComments();
        
        require 'view/admin/frontend/postViewAdmin.php';
        
        require 'view/admin/frontend/template.php';
    }
    }
    
    public function editPostAdmin () {
        $postManager = new PostManager();
        
        $post = $postManager->getSinglePost($_GET['id']);
        
         if ($post->getId() === NULL) {
            require 'view/frontend/404.php';;
        } else {
            
        
        $commentManager = new CommentManager();
        
        $comments = $commentManager->getCommentsFromSinglePost($_GET['id']);
        
        $reportedComments = $commentManager->getReportedComments();
        
        require 'view/admin/frontend/editPostAdmin.php';
        
        require 'view/admin/frontend/template.php';
    }
    }
    
    public function addPost($title, $content) {
        
        $post = new PostEntity();
        $post->setTitle($title)
                 ->setContent($content);
                
        
        $postManager = new PostManager;
        $postManager->addPost($post);
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        
        
        
    }
    
    public function editPost($id, $content, $title) {
        
        
        
        $postManager = new PostManager();
        $postManager->editPost($id, $content, $title);
        
        $commentManager = new CommentManager();
        $reportedComments = $commentManager->getReportedComments();
        
        
        
    }
    
    
        
    
    
    public function deletePost($id) {
       
       
       $postManager = new PostManager();
       $postManager->deletePost($id);
       
       
       
       header('Location: https://projet3.cpdmdev-mg.fr/?action=admin&adminAction=adminSpace');
       
       
    }
    
    
   
}




