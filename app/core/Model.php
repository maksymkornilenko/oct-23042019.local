<?php

namespace core;

use mysqli;

class Model {

    /**
     * 
     * @var mysqli
     */
    protected $db;
    protected $table;
    public $task;
    public $delete;

    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	$this->task = filter_input(INPUT_POST, 'add');
        $this->delete= filter_input(INPUT_POST, 'delete');
    }

    public function all() {
	$query = "SELECT*FROM " . $this->table . ";";
	$result = $this->db->query($query);
	if (!$result) {
	    return false;
	}
	return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function add($name) {
        if (!empty($this->task)) {
            return $this->db->query("INSERT INTO tasks (name) VALUES ('".$this->task."')");
	    
	}else{
	    return false;
	}   
    }
    public function delete($id){
            return $this->db->query("DELETE FROM `tasks` WHERE id=".$this->delete.";");
    }
    public function update($name) {
        if (!empty($this->task)) {
            return $this->db->query("UPDATE `tasks` SET name WHERE id=".$this->delete.";");
	    
	}else{
	    return false;
	}   
    }

}
