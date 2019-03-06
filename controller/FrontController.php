<?php
//TEST//
namespace App\Controller;

use App\Model\PostManager;
use App\Model\CommentManager;



class FrontController {

    public function listPosts() {
        $manager = new PostManager();
        $posts = $manager->getPosts();

        require('view/frontend/listPostsView.php');
    }

    public function post() {
        $manager = new PostManager();
        $post = $manager->getSinglePost($_GET['id']);
        
        //$comments = getComments($_GET['id']);

        require 'view/frontend/postView.php';
    }

    public function getComments() {
        
        $manager = new CommentManager();
        $comments = $manager->getCommentsFromSinglePost($_GET['id']);
        
        require 'view/frontend/postView.php';

        /*$affectedLines = postComments($post_id, $author, $comment);

        if ($affectedLines === false) {

            die('Impossible d\'ajouter ce commentaire');
        } else {
            header('Location: index.php?action=post&id=' . $post_id);
        }*/
    }

}
