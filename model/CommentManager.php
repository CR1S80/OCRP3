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
        return $comments->execute(array($entity->getId(), $entity->getAuthor(), $entity->getComment()));

         
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

}
