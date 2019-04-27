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
    public $change;
    public $update;

    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	$this->task = filter_input(INPUT_POST, 'add');
        $this->delete= filter_input(INPUT_POST, 'delete');
        $this->change= filter_input(INPUT_POST, 'change');
	$this->update= filter_input(INPUT_POST, 'update');
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
    public function change() {
            return $this->db->query("UPDATE `tasks` SET `name`= '".$this->change."' WHERE id=".$this->update.";");   
    }
}
