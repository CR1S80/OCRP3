<?php

namespace App\Model;

use App\Model\DbConnect;
use App\Model\CommentEntity;

class CommentManager {

    private $db;

    public function __construct() {

        $this->db = DbConnect::connect();
    }

    public function addComments(CommentEntity $entity) {

        $comments = $this->db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES (?, ?, ?, NOW())');
        return $comments->execute(array($entity->getId(),
                    $entity->getAuthor(),
                    $entity->getComment()
        ));
    }

    public function getCommentsFromSinglePost($postId) {

        $req = $this->db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $req->execute(array($postId));
        $tab = [];
        foreach ($req->fetchAll() as $result) {

            $comments = new CommentEntity();
            $comments->setId($result['id'])
                    ->setAuthor($result['author'])
                    ->setComment($result['comment'])
                    ->setComment_date($result['comment_date_fr']);

            $tab[] = $comments;
        }


        return $tab;
    }

    public function getReportedComments() {

        $req = $this->db->prepare('SELECT comments.id, comments.author, comments.comment, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comments.post_id, comments.reports, posts.title FROM comments '
                                . 'JOIN posts ON posts.ID = comments.post_id '
                .                 'WHERE comments.reports > 0 ORDER BY comments.comment_date DESC');
        $req->execute();
        $tab = [];
        foreach ($req->fetchAll() as $result) {
            
            $post = new PostEntity();
            $post->setTitle($result['title']);
            $comments = new CommentEntity();
            $comments->setId($result['id'])
                    ->setPost_id($result['post_id'])
                    ->setAuthor($result['author'])
                    ->setComment($result['comment'])
                    ->setComment_date($result['comment_date_fr'])
                    ->setReports($result['reports'])
                    ->setPost($post);

            $tab[] = $comments;
        }


        return $tab;
    }
    
    public function setReportedComment($commentId) {
        
        $comments = $this->db->prepare('UPDATE comments SET reports = reports + 1 WHERE ID=?');
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        return $comments->execute(array($commentId));
        
        
        
        
        
    }

    public function deleteComment($commentId) {

        $comments = $this->db->prepare('DELETE FROM comments WHERE id=?');
        
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
        
        return $comments->execute(array($commentId));
        
        
    }
    
    public function validationComment($commentId) {
        $comments = $this->db->prepare('UPDATE comments set reports = 0 WHERE id=?');
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        return $comments->execute(array($commentId));
        
        
    }
    
    

}
