<?php
//TEST//
namespace App\Controller;

use App\Model\PostManager;



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

        include 'view/frontend/postView.php';
    }

    public function addComments($post_id, $author, $comment) {

        $affectedLines = postComments($post_id, $author, $comment);

        if ($affectedLines === false) {

            die('Impossible d\'ajouter ce commentaire');
        } else {
            header('Location: index.php?action=post&id=' . $post_id);
        }
    }

}
