<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {
    public function __construct() {
	parent::__construct();
	$this->table='tasks';
    }

    public function add($name) {
        if (!empty($this->task)) {
            return $this->db->query("INSERT INTO tasks (name) VALUES ('".$this->task."')");
	    
	}else{
	    return false;
	}
        
    }

}
