<?php

namespace models;

use core\Model;

class ModelApi extends Model {

    public function __construct() {
	parent::__construct();
	$this->table='questions';
    }
    public function addi($question){
	$query="insert into ".$this->table." values (null,'{$question['author']}','{$question['text']}');";
	$this->db->query($query);
    }
    public function deleting($question){
	$query= $this->db->query("DELETE FROM `questions` WHERE id=".$question['id'].";");
	$this->db->query($query);
    }
}
