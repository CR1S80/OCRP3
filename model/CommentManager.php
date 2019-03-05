<?php

namespace App\Model;

use App\Model\DbConnect;

class CommentManager {

    private $db;

    public function __construct() {

        $this->db = DbConnect::connect();
    }

    public function getComments($postId) {
        $db = dbConnect();
        $comments = $this->db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getCommentsFromSinglePost($post_id, $author, $comment) {
        $db = dbConnect();
        $comments = $this->db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES (?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($post_id, $author, $comment));

        return $affectedLines;
    }

}
