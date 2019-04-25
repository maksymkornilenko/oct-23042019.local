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

    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	$this->task = filter_input(INPUT_POST, 'add');
    }

    public function all() {
	$query = "SELECT*FROM " . $this->table . ";";
	$result = $this->db->query($query);
	if (!$result) {
	    return false;
	}
	return $result->fetch_all(MYSQLI_ASSOC);
    }

}
