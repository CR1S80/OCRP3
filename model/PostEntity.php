<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of PostEntity
 *
 * @author crisd
 */
class PostEntity {
    
    private $id;
    private $title;
    private $content;
    private $creation_date;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCreation_date() {
        return $this->creation_date;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function setCreation_date($creation_date) {
        $this->creation_date = $creation_date;
        return $this;
    }


    
}
