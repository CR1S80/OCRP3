<?php

namespace App\Controller;

use App\Model\PostManager;
use App\Model\CommentManager;
use App\Model\CommentEntity;



class FrontController {

    public function listPosts() {
        $manager = new PostManager();
        $posts = $manager->getLastFivePosts();

        require('view/frontend/listPostsView.php');
    }

    public function post() {
        $manager = new PostManager();
        $post = $manager->getSinglePost($_GET['id']);
        
                
        $manager = new CommentManager();
        $comments = $manager->getCommentsFromSinglePost($_GET['id']);
        

        require 'view/frontend/postView.php';
    }

    public function addComment($id, $author, $comment) {
        
        $comments = new CommentEntity();
        $comments->setId($id)
                 ->setAuthor($author)
                 ->setComment($comment);
        $commentManager = new CommentManager;
        $commentManager->addComments($comments);
        
        
       
        
        
    }
    
    public function reportedComment($id) {
        $manager = new CommentManager();
        $comment = $manager->setReportedComment($id);
        
        
    }

}

