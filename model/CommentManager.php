<?php

namespace App\Model;

use App\Model\DbConnect;
use App\Model\CommentEntity;

class CommentManager {

    private $db;

    public function __construct() {

        $this->db = DbConnect::connect();
    }

    public function addComments($postId) {
       
        $comments = $this->db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comment;
    }

    public function getCommentsFromSinglePost($postId) {
        
        $req = $this->db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $req->execute(array($postId));
        $result = $req->fetchAll();
        $comments = new CommentEntity();
        $comments->setId($result['id'])
                 ->setPost_id($result['post_id'])
                 ->setAuthor($result['author'])
                 ->setComment($result['comment'])
                 ->setComment_date($result['comment_date_fr']);
        var_dump($result);
        return $comments;
    }

}
